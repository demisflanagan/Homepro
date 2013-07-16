<div class="row">

    <div class="span10 offset1">
        <h1>Homepro</h1>
        <?=$this->draw('admin/menu')?>
    </div>

</div>
<div class="row">
    <div class="span10 offset1">
        <form action="/admin/homepro/" class="form-horizontal" method="post">
            <div class="control-group">
		<p> Enter the username of the profile you would like to appear on the homepage:</p>                
		<label class="control-label" for="name">Consumer key</label>
                <div class="controls">
                    <input type="text" id="name" placeholder="Homepro Username" class="span4" name="consumer_key" value="<?=htmlspecialchars(\Idno\Core\site()->config()->homepro['homepro_username'])?>" >
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn-primary">Save</button>
                </div>
            </div>
            <?= \Idno\Core\site()->actions()->signForm('/admin/homepro/')?>
        </form>
    </div>
</div>
