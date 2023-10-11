<div class="mb-6" 
    wire:ignore
    x-data
    x-init="
        () => {
            const inputPdf = FilePond.create($refs.{{ $attributes->get('ref') ?? 'pdf' }}, {
                allowMultiple: true,                 // Allow multiple file uploads
                acceptedFileTypes: ['application/pdf'], // Specify accepted file types (PDF)
                maxFileSize: '5MB'
              });
            inputPdf.setOptions({
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
    <x-header-label value=" {{ __('Upload other media') }} " />
    {{-- PDF --}}
    <input type="file" x-ref="{{ $attributes->get('ref') ?? 'pdf' }}" data-max-files="3" data-allow-reorder="true" data-max-file-size="5MB" multiple>
  </div>