<div style="max-width: 500px; margin: auto; min-width: 300px; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-size: 14px; padding: 20px; background-color: #eee; min-height: 550px; border-radius: 12px">
     <header style="height: 150px; width: 100%; text-align: center; background-color: #fff; background-image: url('{{ url('img/bg/05.jpg') }}'); background-size: cover; background-repeat: no-repeat; display: table">
         <h1 style="font-size: 28px; text-transform: capitalize; font-weight: 500; text-align: center; display: table-cell; vertical-align: middle">
         {{ config('pagekit.title', 'Page Title - PageKit.') }}
         </h1>
     </header>
    <h1 style="font-size: 22px; text-transform: capitalize; font-weight: 500">
        {{ $data['full_name'] }} : contact request</h1>
    <hr>
    <h3 style="font-size: 18px">Subject: {{ $data['subject'] }}</h3>

    <p>{{ $data['message'] }}</p>

</div>
