<div class="container">
    <h4>Bootstrap Grid System</h4>
    <p>O grid system possui doze colunas por linha.</p>
    <div class="row border-red">
        <div class="col-1 border-green">1</div>
        <div class="col-1 border-green">2</div>
        <div class="col-1 border-green">3</div>
        <div class="col-1 border-green">4</div>
        <div class="col-1 border-green">5</div>
        <div class="col-1 border-green">6</div>
        <div class="col-1 border-green">7</div>
        <div class="col-1 border-green">8</div>
        <div class="col-1 border-green">9</div>
        <div class="col-1 border-green">10</div>
        <div class="col-1 border-green">11</div>
        <div class="col-1 border-green">12</div>
    </div>

    <br>

    <p>As colunas excedentes são jogadas para baixo.</p>
    <div class="row border-red">
        <div class="col-4 border-green">AAA</div>
        <div class="col-4 border-green">BBB</div>
        <div class="col-4 border-green">CCC</div>
        <div class="col-4 border-green">DDD</div>
    </div>

    <br>

    <p>
        Quando small(sm) as colunas ocupam toda a linha.
        <br>
        Quando large(lg) as colunas ocupam a mesma linha.
    </p>
    <div class="row border-red">
        <div class="col-sm-12 col-lg-6 border-green">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, consequatur soluta illum eligendi ducimus quos vel a dicta facere delectus excepturi dolorum nisi fuga corrupti ullam. Magnam amet quaerat id!
            Quia provident voluptatum magni, voluptatibus illo odit accusamus corrupti! In porro maiores deserunt delectus expedita. Qui, cum rem. Nemo ipsam totam repudiandae odio aliquam fuga voluptatem adipisci labore voluptas laborum!
        </div>
        <div class="col-sm-12 col-lg-6 border-green">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, perferendis non, in numquam quisquam animi ex voluptatem incidunt explicabo officia natus minus eaque ratione earum repellendus? Adipisci aperiam libero qui.
            Omnis, sequi incidunt. Aliquam, maxime iste! Illo totam saepe voluptatem. Fugiat, laborum eaque aut velit recusandae, ad dolorum minima quia blanditiis dolorem placeat autem dolore error totam? Modi, natus quae.
        </div>
    </div>

    <br>

    <p>
        As colunas devem ser organizadas por rows.
        <br>
        As colunas devem limitar-se ao tamanho da row.
    </p>
    <div class="row border-red">
        <div class="col-4 border-green">AAA</div>
        <div class="col-4 border-green">BBB</div>
        <div class="col-4 border-green">CCC</div>
    </div>

    <br>

    <div class="row border-blue">
        <div class="col-12">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quis laborum, libero nostrum, minima ipsa excepturi eum voluptatibus iste autem alias modi numquam aliquam tempore voluptate consequatur labore ea mollitia.
            Expedita praesentium, voluptatum vitae sint nam aliquid odio debitis fuga, assumenda nesciunt perferendis enim reiciendis placeat? Fuga natus obcaecati incidunt repellat enim, facilis ipsum ullam inventore, consequuntur velit eaque quos.
        </div>
    </div>

    <br>

    <p>O grid system permite a criação de rows dentro de cols.</p>
    <div class="row">
        <div class="col-4 border-green">AAA</div>
        <div class="col-4 border-green">BBB</div>
        <div class="col-4 border-green">
            <div class="row">
                <div class="col-sm-6 col-lg-8 border-blue">CCC</div>
                <div class="col-sm-6 col-lg-4 border-blue">DDD</div>
            </div>
        </div>
    </div>

    <br>

    <strong>Limitando colunas com row-cols</strong>
    <p>
        <br>
        Quando large(lg) a linha possui três colunas.
        <br>
        Quando medium(md) a linha possui duas colunas.
        <br>
        Quando small(sm) a linha possui uma coluna.
    </p>
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
        <div class="col border-red">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo maiores magni quod voluptatibus eligendi quasi, odit nihil tempora dolor incidunt sint rerum facilis cum fugiat magnam repudiandae ut similique optio.
            Earum nobis provident error sint facere minima sit, velit in reprehenderit, doloribus voluptas tempore consequatur quam rerum odio blanditiis iusto, optio laudantium corporis ducimus harum fuga. Sint eveniet nisi sunt!
        </div>
        <div class="col border-green">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo maiores magni quod voluptatibus eligendi quasi, odit nihil tempora dolor incidunt sint rerum facilis cum fugiat magnam repudiandae ut similique optio.
            Earum nobis provident error sint facere minima sit, velit in reprehenderit, doloribus voluptas tempore consequatur quam rerum odio blanditiis iusto, optio laudantium corporis ducimus harum fuga. Sint eveniet nisi sunt!
        </div>
        <div class="col border-blue">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo maiores magni quod voluptatibus eligendi quasi, odit nihil tempora dolor incidunt sint rerum facilis cum fugiat magnam repudiandae ut similique optio.
            Earum nobis provident error sint facere minima sit, velit in reprehenderit, doloribus voluptas tempore consequatur quam rerum odio blanditiis iusto, optio laudantium corporis ducimus harum fuga. Sint eveniet nisi sunt!
        </div>
    </div>
</div>