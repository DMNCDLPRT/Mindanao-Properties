
<div class="mb-6 pt-4" 
    wire:ignore
    x-data
    x-init="
        () => {
            const inputImage = FilePond.create($refs.{{ $attributes->get('ref') ?? 'image' }});
            inputImage.setOptions({
                allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }},
                server: {
                    process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        @this.upload('{{ $attributes->whereStartsWith('wire:model')->first() }}', file, load, error, progress)
                    },
                    revert: (filename, load) => {
                        @this.removeUpload('{{ $attributes->whereStartsWith('wire:model')->first() }}', filename, load)
                    },
                },
                allowImagePreview: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
                allowFileTypeValidation: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
                acceptedFileTypes: {!! $attributes->get('acceptedFileTypes') ?? 'null' !!},
                allowFileSizeValidation: {{ $attributes->has('allowFileSizeValidation') ? 'true' : 'false' }},
                maxFileSize: {!! $attributes->has('maxFileSize') ? "'".$attributes->get('maxFileSize')."'" : 'null' !!}
            });
        }
    "
  >


  <x-header-label value=" {{ __('Upload Images Here') }} " />
  <input type="file" x-ref="{{ $attributes->get('ref') ?? 'image' }}" data-max-files="5" data-allow-reorder="true" data-max-file-size="3MB" multiple>
</div>