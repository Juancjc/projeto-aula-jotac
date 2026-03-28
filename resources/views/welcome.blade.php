@extends('layouts.app')

@section('content')
    <div class="row g-1">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Sistema</h5>
                    <p class="card-text">Gerencie seus dados com facilidade.</p>
                    <button class="btn btn-dark">Acessar</button>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Relatórios</h5>
                    <p class="card-text">Visualize informações detalhadas.</p>
                    <button class="btn btn-dark">Ver</button>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Usuários</h5>
                    <p class="card-text">Controle acessos e permissões.</p>
                    <button class="btn btn-dark">Gerenciar</button>
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-md-4">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Configurações</h5>
                    <p class="card-text">Ajuste o sistema conforme necessário.</p>
                    <button class="btn btn-dark">Abrir</button>
                </div>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="col-md-4">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">API</h5>
                    <p class="card-text">Integração com outros sistemas.</p>
                    <button class="btn btn-dark">Acessar</button>
                </div>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="col-md-4">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Suporte</h5>
                    <p class="card-text">Precisa de ajuda? Estamos aqui.</p>
                    <button class="btn btn-dark">Contato</button>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="buttonswal">
            Exibir alerta
        </button>

    </div>
@endsection
@push('js')
    <script>
        document.getElementById('buttonswal').addEventListener('click', function() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            });
        })
    </script>
@endpush
