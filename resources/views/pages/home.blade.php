@extends( 'layout.app' )

@section('titlePage')
    laravel-migration-seeder
@endsection

@section( 'content' )

<div class="mainView">
    <div class="container mb-5 mt-5 grid">
        <div class="row gap-3">
            @foreach ($trains as $elem )
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $elem['azienda'] }}</h5>
                            <p class="card-text">In orario: {{ $elem->in_orario ? 'Sì' : 'No' }}</p>
                            <p class="card-text">Stato volo: {{ $elem->cancellato ? 'Cancellato' : 'In viaggio' }}</p>
                            <p class="card-text">{{ $elem['orario_arrivo'] }}</p>
                            <p class="card-text">Codice treno: <span class="text-warning">{{ $elem['codice_treno'] }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection