<?php
       
    ?>
    <body class="teste">
        <div style="padding-left: 100px">
            <form class="row g-3 container py-3 ps-5 "  method="post" action="produto.php">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label fs-5" >Nome do Produto</label>
                    <input name="nome"  type="text" class="form-control" id="inputEmail4" >
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label fs-5">Preço</label>
                    <input name="preco" type="text" class="form-control" id="inputPassword4" placeholder="R$">
                </div>
                <div>
                    <label for="inputAddress" class="form-label fs-5 ">Descrição</label>
                    <textarea name="descricao"  class="form-control " aria-label="With textarea"></textarea>
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label fs-5">Quantidade</label>
                    <select id="inputState" class="form-select" name="quant">
                    <option selected name="quant">1</option>
                    <option name="quant">3</option>
                    <option name="quant">6</option>
                    <option name="quant">9</option>
                    <option name="quant">12</option>
                    <option name="quant">15</option>
                    </select>
                </div>

                <div class="col-12 py-4">
                    <button type="submit" class="btn btn-primary fs-5 ">Enviar</button>
                </div>
            </form>
        </div>
    </body>
    
    <?php
       
    ?>
