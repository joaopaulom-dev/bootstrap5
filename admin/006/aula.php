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
</div>