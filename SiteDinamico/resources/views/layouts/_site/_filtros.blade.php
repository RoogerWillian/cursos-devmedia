<div class="row">
    <form>
        <div class="input-field col s6 m4">
            <select id="status">
                <option value="">Todos os status</option>
                <option value="aluguel">Aluguel</option>
                <option value="venda">Venda</option>
            </select>
            <label for="status">Status</label>
        </div>

        <div class="input-field col s6 m4">
            <select id="tipo">
                <option value="">Todos os tipos</option>
                <option value="1">Alvenaria</option>
                <option value="2">Apartamento</option>
                <option value="3">Duplex</option>
            </select>
            <label for="tipo">Tipo de imóvel</label>
        </div>

        <div class="input-field col s9 m4">
            <select id="cidade">
                <option value="">Todas as cidades</option>
                <option value="1">Ipaussu</option>
                <option value="2">Santa Cruz do Rio Pardo</option>
                <option value="3">Ourinhos</option>
                <option value="4">Bauru</option>
            </select>
            <label for="cidade">Cidades</label>
        </div>

        <div class="input-field col s3 m3">
            <select id="dormitorios">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">Mais</option>
            </select>
            <label for="dormitorios">Dormitórios</label>
        </div>

        <div class="input-field col s12 m4">
            <select id="valor">
                <option value="1">Até R$ 500,00</option>
                <option value="2">R$ 500,00 a 1.000,00</option>
                <option value="3">R$ 1.000,00 a 5.000,00</option>
                <option value="4">R$ 5.000,00 a 10.000,00</option>
                <option value="5">R$ 10.000,00 a 50.000,00</option>
                <option value="6">R$ 5.000,00 a 100.000,00</option>
                <option value="7">R$ 100.000,00 a 200.000,00</option>
                <option value="8">R$ 200.000,00 a 300.000,00</option>
                <option value="9">R$ 300.000,00 a 500.000,00</option>
                <option value="10">R$ 500.000,00 a 1.000.000,00</option>
                <option value="11">Acima de R$ 1.000.000,00</option>
            </select>
            <label for="valor">Valor</label>
        </div>

        <div class="input-field col s12 m3">
            <input type="text" class="validate" id="bairro" name="bairro">
            <label for="bairro">Bairro</label>
        </div>

        <div class="input-field col s12 m2">
            <button class="btn deep-orange darken-1 right">Filtrar</button>
        </div>

    </form>
</div>