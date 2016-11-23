<section class="row">
    <div class="input-field col s6">
        <form class="col s12" method="POST" action="/insereArtigo.php">
            <input type="text" name="url" value="<?=$uri?>" hidden="true">
            <input type="text" value="<?=$uri?>" disabled="true">
            <input name="titulo" type="text" class="validate" placeholder="Título" required />
            <textarea name="texto" style="height: 250px;" placeholder="Texto do Artigo Aqui"></textarea>
            <input type="submit" value="Enviar" class="btn waves-effect waves-light"/>
        </form>
    </div>
</section>