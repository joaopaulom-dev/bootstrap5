<div class="container">
    <h4>Estilizando formulários com Bootstrap</h4>
    <p>
        Para estilizar label utiliza-se a classe form-label.
        <br>
        Para estilizar input utiliza-se a classe form control.
    </p>
    <div class="row">
        <div class="col-6 offset-3">
            <form>
                <div class="mb-3">
                    <label class="form-label">Usuário</label>
                    <input type="text" class="form-control">
                    <span class="form-text">Informa nome de usuário para login.</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control">
                    <span class="form-text">Informa senha para login.</span>
                </div>

                <div class="mb-5 form-check">
                    <input type="checkbox" class="form-check-input" id="check1">
                    <label for="check1" class="form-check-label">Manter-se logado.</label>
                </div>

                <div class="mb-3 text-end">
                    <button type="button" class="btn btn-primary">Realizar meu login</button>
                </div>
            </form>
        </div>
    </div>

    <br>

    <p>
        Para estilizar input(select) utiliza-se a classe form-select.
        <br>
        Para um input receber mais de um valor utiliza-se multiple.
    </p>
    <div class="row">
        <div class="col-6 offset-3">
            <form>
                <div class="mb-3">
                    <label class="form-label">Sexo</label>
                    <select class="form-select">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Prefiro não dizer</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Empresas</label>
                    <select class="form-select" multiple>
                        <option>Logon Soluções</option>
                        <option>Cylog Cloud</option>
                        <option>SEEO Engenharia</option>
                        <option>Verdes Mares Distribuidora</option>
                        <option>Objetiva Distribuidora</option>
                        <option>Lacet Advogados</option>
                        <option>Fiat Mavel</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>