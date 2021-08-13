<link href="<?=base_url();?>/assets/css/cssAdmin.css" rel="stylesheet">




<!-- <div class="container" id="editPainel" style="display:none ; width: 730px;"> -->
<form method ="post" action ="<?=base_url();?>admin/atualizarpainel"> 

    <div class="row" style="margin-left: 425px;width: 577px;margin-top: 112px;">
            <div class='form-group'>
              <div class='col-xs-12 form-group'>
                <label class="control-label locked" for="name-input-field">Texto1</label>
                <input type="text" name="texto1" value="<?= $painel->texto1?>"/>
                <input type="hidden" name="id" value="<?= $painel->id?>"/>
              </div>
            </div>
            <div class='form-group'>
              <div class='col-xs-12 form-group'>
                <label class="control-label locked" for="phone-input-field">Texto2</label>
                <input type="text" name="texto2" value="<?= $painel->texto2?>"/>
              </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >a1</label>
                    <textarea name="a1" cols="0" rows="3" class="form-control locked"><?= $painel->a1?></textarea>
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >a2</label>
                    <textarea name="a2" cols="0" rows="3" class="form-control locked"><?= $painel->a2?></textarea>
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >a3</label>
                    <textarea name="a3" cols="0" rows="3" class="form-control locked"><?= $painel->a3?></textarea>
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >a4</label>
                    <textarea name="a4" cols="0" rows="3" class="form-control locked"><?= $painel->a4?></textarea>
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >b1</label>
                    <textarea name="b1" cols="0" rows="3" class="form-control locked"><?= $painel->b1?></textarea>
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >b2</label>
                    <textarea name="b2" cols="0" rows="3" class="form-control locked"><?= $painel->b2?></textarea>
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >b3</label>
                    <textarea name="b3" cols="0" rows="3" class="form-control locked"><?= $painel->b3?></textarea>
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field" >b4</label>
                    <textarea name="b4" cols="0" rows="3" class="form-control locked"><?= $painel->b4?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="float: right;margin-bottom: 27px;">Salvar edição</button>
        </form>
  