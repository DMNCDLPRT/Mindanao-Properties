<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate | Single Property</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript"
        src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=1QkYp78vJoEaJEMo_yIAHrsfLMwACu-lI_IlBoR9BHdnBlTzRMOGFPczQGK5joZTgrSDapXL_jrRjuNP2Qpql71hAKRjw5qUuyhB84_VOX1jdaJbxRhgFJVTnYhEqUL26Adq-bA353a9r9d-5c3WCQ"
        charset="UTF-8"></script>
    <link rel="stylesheet" crossorigin="anonymous"
        href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9kZW1vLmxhcmFpbmZvLmNvbS90YWlsd2luZC1jc3MvdGVtcGxhdGUvcmVhbCUyMHN0YXRlL3NpbmdsZS1wcm9wZXJ0eS5odG1s" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">

    {{-- custom styling --}}
    <link rel="stylesheet" href="/css/image-gallery.css">
</head>
<!-- <style>
        [x-cloak] {
            display: none !important;
        }
    </style> -->


<body>
    <x-front.auth-nav />
    @livewire('components.property-details', ['property' => $property])
    {{-- @livewire('components.property-details') --}}


    @livewire('components.footer')
</body>

{{-- custom script --}}
<script src="/js/image-gallery.js"></script>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>

<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: callback => {
            fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback("us"));
        },
        utilsScript: "/intl-tel-input/js/utils.js?1690975972744"
        // just for formatting/placeholders etc
    });
</script>


</html>
