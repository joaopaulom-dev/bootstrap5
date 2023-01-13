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
</div>