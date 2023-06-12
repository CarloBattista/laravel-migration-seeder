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
                            <h5 class="card-title">Stazione di partenza: {{ $elem['stazione_partenza'] }}</h5>
                            <h5 class="card-title">Stazione di arrivo: {{ $elem['stazione_arrivo'] }}</h5>
                            <p class="card-text mt-4">In orario: {{ $elem->in_orario ? 'Sì' : 'No' }}</p>
                            <p class="card-text">Stato treno: {{ $elem->cancellato ? 'Cancellato' : 'In viaggio' }}</p>
                            <p class="card-text">Orario di arrivo stimato: {{ $elem['orario_arrivo'] }}</p>
                            <p class="card-text">Codice treno: <span class="text-warning">{{ $elem['codice_treno'] }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection