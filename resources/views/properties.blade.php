

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate | Home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript"
        src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=GcrOdWYQe6GA26bjW5QLGxLM85gxcRHGkeKiD_kLTGrNVHyCav388dqyb6rCpWhFZqySmV87Wi5bEiukorDlvKLQ-CBhQ9OGbqpsGDOsVmSMuT_KoIsKTl6qnKLuPX6t"
        charset="UTF-8"></script>
    <link rel="stylesheet" crossorigin="anonymous"
        href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9kZW1vLmxhcmFpbmZvLmNvbS90YWlsd2luZC1jc3MvdGVtcGxhdGUvcmVhbCUyMHN0YXRlL2luZGV4Lmh0bWw" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
</head>

<body>
    <div>
        
        <x-front.auth-nav />
        @livewire('components.search')
        @livewire('components.properties',[ 'propertieslivewirecontroller' => $allProperties])
    
        @livewire('components.footer')
        
     
    </div>
</body>

</html>
