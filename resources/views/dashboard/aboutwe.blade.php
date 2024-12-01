@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4">Sobre a Nossa Livraria</h1>
                <p class="lead">Nossa missão é oferecer a melhor experiência literária para todos os leitores!</p>
                <hr class="my-4">
            </div>

            <div class="col-md-12">
                <h2 class="mb-3">Quem Somos</h2>
                <p>
                    Fundada em 2024, nossa livraria é dedicada a promover o amor pela leitura e oferecer uma variedade de livros de alta qualidade.
                    Somos especializados em vários gêneros, como ação, romance, infantil e muito mais. Nosso objetivo é tornar acessível e inspiradora a experiência de leitura para todos os tipos de leitores.
                </p>
            </div>

            <div class="col-md-12">
                <h2 class="mb-3">Missão</h2>
                <p>
                    Nossa missão é democratizar o acesso à literatura, oferecendo livros que promovam a educação, o conhecimento e o crescimento pessoal.
                </p>
            </div>

            <div class="col-md-12">
                <h2 class="mb-3">Visão</h2>
                <p>
                    Ser a livraria mais querida e confiável do mercado, conhecida por oferecer curadoria de qualidade e excelente atendimento ao cliente.
                </p>
            </div>

            <div class="col-md-12">
                <h2 class="mb-3">Valores</h2>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle"></i> Excelência em qualidade</li>
                    <li><i class="fas fa-check-circle"></i> Compromisso com o cliente</li>
                    <li><i class="fas fa-check-circle"></i> Inovação na curadoria de livros</li>
                    <li><i class="fas fa-check-circle"></i> Responsabilidade social</li>
                </ul>
            </div>

            <div class="col-md-12">
                <h2 class="mb-3">Entre em Contato</h2>
                <p>
                    Se tiver dúvidas ou quiser saber mais sobre nossa livraria, entre em contato conosco através do e-mail ou telefone abaixo.
                </p>
                <p>Email: franww13@gmail.com | Tel: (+359) 926675874</p>
            </div>
        </div>
    </div>

    <!-- Estilos diretamente no arquivo Blade -->
    <style>
        /* Estilo da página Sobre Nós */
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, p {
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        ul li {
            margin-bottom: 10px;
            font-size: 1rem;
            color: #666;
        }

        hr {
            border: 0;
            height: 2px;
            background: #e74c3c;
            margin: 30px 0;
        }

        .lead {
            font-size: 1.25rem;
            color: #555;
        }

        .display-4 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 30px;
        }

        .list-unstyled li {
            display: flex;
            align-items: center;
        }

        .list-unstyled li i {
            margin-right: 8px;
            color: #e74c3c;
        }
    </style>
@endsection
