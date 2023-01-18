<div class="container">
    <h4>Criando componentes com Bootstrap</h4>
    <p>
        <strong>Accordion</strong>
        <br>
        Para expandir o elemento assim que a página é carregada, utiliza-se a classe show.
    </p>
    <div class="row">
        <div class="col">
            <div class="accordion" id="accordion1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="first-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#first-collapse" aria-expanded="true" aria-controls="first-collapse">Clique para expandir</button>
                    </h2>
                    <div id="first-collapse" class="accordion-collapse collapse show" aria-labelledby="first-header" data-bs-parent="#accordion1">
                        <div class="accordion-body">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio distinctio doloremque provident veritatis! Laboriosam laborum explicabo, iusto quaerat ex aliquam. Dolorem, amet dolore? A odit incidunt possimus recusandae, totam et.
                            Maxime esse commodi doloribus dolore odit id dignissimos sequi recusandae, nostrum, omnis laboriosam perspiciatis. Itaque harum architecto qui voluptas ex. Quod non odio cumque neque perferendis, autem ut et id!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="first-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#first-collapse" aria-expanded="true" aria-controls="first-collapse">Clique para expandir</button>
                    </h2>
                    <div id="first-collapse" class="accordion-collapse collapse" aria-labelledby="first-header" data-bs-parent="#accordion1">
                        <div class="accordion-body">
                            <div class="row gx-2 align-items-end">
                                <div class="col">
                                    <p>Quantas linhas possui o lorem?</p>
                                </div>
                                <div class="col">
                                    <label for="select1" class="form-label">Resposta</label>
                                    <select id="select1" class="form-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary">Responder</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <p>
        <strong>Alert</strong>
        <br>
        A classe alert-link estiliza os links com a mesma cor do alerta.
    </p>
    <div class="row">
        <div class="col">
            <div class="alert alert-success">
                Sounds like everything is ok.
                <br>
                <a href="#" class="alert-link">Give us your feedback!</a>
            </div>
        </div>
        <div class="col">
            <div class="alert alert-warning">
                Sounds like something needs atention.
                <br>
                <a href="#" class="alert-link">Give us your feedback!</a>
            </div>
        </div>
        <div class="col">
            <div class="alert alert-danger">
                Sounds like something goes wrong.
                <br>
                <a href="#" class="alert-link">Give us your feedback!</a>
            </div>
        </div>
    </div>

    <br>

    <p>
        <strong>Carroulsel</strong>
        <br>
        A classe active define o slide mostrado por padrão.
        <br>
        A propriedade data-bs-ride habilita o auto slide do carroulsel.
    </p>
    <div class="row">
        <div class="col">
            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="bg-danger p-2 text-center h-200">
                            <span class="text-white">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum explicabo velit nihil, commodi illo blanditiis soluta quas vel repudiandae itaque corporis perferendis facere neque qui totam laboriosam reiciendis, quod sapiente?
                                Velit cumque itaque similique hic ad modi sed, aliquid laboriosam, laudantium esse nisi assumenda eveniet ut possimus enim beatae at voluptas nam nostrum expedita? Voluptas quaerat quod nihil suscipit? Voluptatibus!
                            </span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-warning p-2 text-center h-200">
                            <span class="text-white">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum explicabo velit nihil, commodi illo blanditiis soluta quas vel repudiandae itaque corporis perferendis facere neque qui totam laboriosam reiciendis, quod sapiente?
                                Velit cumque itaque similique hic ad modi sed, aliquid laboriosam, laudantium esse nisi assumenda eveniet ut possimus enim beatae at voluptas nam nostrum expedita? Voluptas quaerat quod nihil suscipit? Voluptatibus!
                            </span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-success p-2 text-center h-200">
                            <span class="text-white">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum explicabo velit nihil, commodi illo blanditiis soluta quas vel repudiandae itaque corporis perferendis facere neque qui totam laboriosam reiciendis, quod sapiente?
                                Velit cumque itaque similique hic ad modi sed, aliquid laboriosam, laudantium esse nisi assumenda eveniet ut possimus enim beatae at voluptas nam nostrum expedita? Voluptas quaerat quod nihil suscipit? Voluptatibus!
                            </span>
                        </div>
                    </div>
                </div>
                <!-- 
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> 
                -->
            </div>
        </div>
    </div>

    <br>

    <p>
        <strong>Collapse</strong>
    </p>
    <div class="row">
        <div class="col text-center">
            <div class="collapse mb-3" id="collapse1">
                <div class="card card-body text-center">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque eos eius voluptatibus magni, accusantium laudantium esse. Numquam rem, quaerat sapiente porro doloribus ullam nam consectetur, totam, quam delectus explicabo aspernatur?
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Abrir collapse1</button>
            </p>
        </div>
        <div class="col text-center">
            <div class="collapse mb-3" id="collapse2">
                <div class="card card-body text-center">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque eos eius voluptatibus magni, accusantium laudantium esse. Numquam rem, quaerat sapiente porro doloribus ullam nam consectetur, totam, quam delectus explicabo aspernatur?
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Abrir collapse2</button>
            </p>
        </div>
        <div class="col text-center">
            <div class="collapse mb-3" id="collapse3">
                <div class="card card-body text-center">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque eos eius voluptatibus magni, accusantium laudantium esse. Numquam rem, quaerat sapiente porro doloribus ullam nam consectetur, totam, quam delectus explicabo aspernatur?
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Abrir collapse3</button>
            </p>
        </div>
    </div>

    <br>

    <p>
        <strong>Dropdown Buttons</strong>
    </p>
    <div class="row gx-3">
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown button</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Dropdown item 1</a></li>
                    <li><a class="dropdown-item" href="#">Dropdown item 2</a></li>
                    <li><a class="dropdown-item" href="#">Dropdown item 3</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Definindo dividers</button>
                <ul class="dropdown-menu">
                    <li><span class="text-muted dropdown-item">Logon Soluções</span></li>
                    <li><a class="dropdown-item" href="#">Painel</a></li>
                    <li><a class="dropdown-item" href="#">Supervisor</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li><span class="text-muted dropdown-item">SEEO</span></li>
                    <li><a class="dropdown-item" href="#">Painel</a></li>
                    <li><a class="dropdown-item" href="#">Supervisor</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li><span class="text-muted dropdown-item">Objetiva Distribuidora</span></li>
                    <li><a class="dropdown-item" href="#">Painel</a></li>
                    <li><a class="dropdown-item" href="#">Supervisor</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="dropdown" data-bs-theme="dark">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Definindo tema dark</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Alterar</a></li>
                    <li><a class="dropdown-item" href="#">Apagar</a></li>
                    <li><a class="dropdown-item" href="#">Detalhes</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Definindo link ativo</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" aria-current="page">Atual</a></li>
                    <li><a class="dropdown-item active" href="#" aria-current="true">Ativo</a></li>
                    <li><a class="dropdown-item" href="#">Outro</a></li>
                </ul>
            </div>
        </div>
    </div>

    <br>

    <!-- Modal 01 -->
    <div class="modal" tabindex="-1" id="modal-01">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body p-3">
                        <div class="row gy-5">
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Nome</label>
                                <input type="text" class="form-control" placeholder="Digite seu nome">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Senha</label>
                                <input type="text" class="form-control" placeholder="Digite sua senha">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 02 -->
    <div class="modal fade" tabindex="-1" id="modal-02">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body p-3">
                        <div class="row gy-5">
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Nome</label>
                                <input type="text" class="form-control" placeholder="Digite seu nome">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Senha</label>
                                <input type="text" class="form-control" placeholder="Digite sua senha">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 03 -->
    <div class="modal fade" tabindex="-1" id="modal-03">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body p-3">
                        <div class="row gy-5">
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Nome</label>
                                <input type="text" class="form-control" placeholder="Digite seu nome">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Senha</label>
                                <input type="text" class="form-control" placeholder="Digite sua senha">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 04 -->
    <div class="modal fade" tabindex="-1" id="modal-04">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body p-3">
                        <div class="row gy-5">
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Nome</label>
                                <input type="text" class="form-control" placeholder="Digite seu nome">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Senha</label>
                                <input type="text" class="form-control" placeholder="Digite sua senha">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 05 -->
    <div class="modal fade" tabindex="-1" id="modal-05">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body p-3">
                        <div class="row gy-5">
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Nome</label>
                                <input type="text" class="form-control" placeholder="Digite seu nome">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="text-align: left;">Senha</label>
                                <input type="text" class="form-control" placeholder="Digite sua senha">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <p>
        <strong>Modals</strong>
    </p>
    <div class="row">
        <div class="col">
            <button type="button" onclick="abrirModal('modal-01')" class="btn btn-primary">Bootstrap modal</button>
        </div>
        <div class="col">
            <button type="button" onclick="abrirModal('modal-02')" class="btn btn-danger">Modal com fade</button>
        </div>
        <div class="col">
            <button type="button" onclick="abrirModal('modal-03')" class="btn btn-warning">Modal large</button>
        </div>
        <div class="col">
            <button type="button" onclick="abrirModal('modal-04')" class="btn btn-success">Modal small</button>
        </div>
        <div class="col">
            <button type="button" onclick="abrirModal('modal-05')" class="btn btn-info">Modal centered</button>
        </div>
    </div>
    <script>
        // -------------------------- Pega id para abrir modal -------------------------- //

        function abrirModal(id) {
            //Pega modal na pagina
            let modal = document.getElementById(id);

            //Transforma em objeto bootstrap
            let bs_modal = new bootstrap.Modal(modal);

            //Apresenta modal
            bs_modal.show();
        }
    </script>

    <br>

    <p>
        <strong>Navs e Tabs</strong>
    </p>
    <div class="row gx-5">
        <div class="col">
            <nav class="nav nav-fill">
                <a href="#" class="nav-link active" aria-current="true">Ativo</a>
                <a href="#" class="nav-link" aria-current="page">Atual</a>
                <a href="#" class="nav-link">Link 03</a>
                <a href="#" class="nav-link">Link 04</a>
            </nav>
        </div>
        <div class="col">
            <nav class="nav nav-tabs nav-fill">
                <a href="#" class="nav-link active" aria-current="true">Ativo</a>
                <a href="#" class="nav-link" aria-current="page">Atual</a>
                <a href="#" class="nav-link">Link 03</a>
                <a href="#" class="nav-link">Link 04</a>
            </nav>
        </div>
        <div class="col">
            <nav class="nav nav-pills nav-fill">
                <a href="#" class="nav-link active" aria-current="true">Ativo</a>
                <a href="#" class="nav-link" aria-current="page">Atual</a>
                <a href="#" class="nav-link">Link 03</a>
                <a href="#" class="nav-link">Link 04</a>
            </nav>
        </div>
    </div>

    <br>

    <p>
        <strong>Navbar e offcanvas</strong>
    </p>
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <!-- Offcanvas show/ hide -->
                        <button class="btn btn-sm btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" aria-controls="offcanvas-1">Show</button>

                        <!-- Navbar brand image -->
                        <img src="006/bootstrap-icon.png" alt="Bootstrap framework icon" class="d-inline-block align-text-center" height="50" width="50">

                        <!-- Navbar brand text -->
                        <h4 class="d-inline-block">Bootstrap</h4>
                    </a>
                    <div class="collapse navbar-collapse">
                        <div class="navbar-nav me-auto">
                            <a href="#" class="nav-link active" aria-current="true">Ativo</a>
                            <a href="#" class="nav-link" aria-current="page">Atual</a>
                            <a href="#" class="nav-link">Link 03</a>
                            <a href="#" class="nav-link">Link 04</a>
                        </div>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Procurando algo?" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Procurar</button>
                        </form>
                    </div>

                    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvas-1" aria-labelledby="Bootstrap offcanvas">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvas-1Label">Bootstrap offcanvas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas-1" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="d-block w-100">
                                <nav class="nav flex-column">
                                    <a href="#" class="nav-link mb-2 active" aria-current="true">Ativo</a>
                                    <a href="#" class="nav-link mb-2" aria-current="page">Atual</a>
                                    <a href="#" class="nav-link mb-2">Link 03</a>
                                    <a href="#" class="nav-link mb-2">Link 04</a>
                                </nav>
                            </div>
                            <div class="d-block w-100">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Procurando algo?" aria-label="Search">
                                    <button class="btn btn-primary" type="submit">Procurar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>