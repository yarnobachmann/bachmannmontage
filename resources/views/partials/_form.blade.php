<form class="form-horizontal" action="" method="post">
    <fieldset>
      <legend class="text-center">Stuur hier een mailtje! <br> <small>Voor meer informatie</small> </legend>

      <!-- Name input-->
      <div class="form-group">
        <label class="col-md-3 control-label" for="name">Uw naam</label>
        <div class="col-md-9">
          <input id="name" name="name" type="text" placeholder="Hier uw naam" class="form-control">
        </div>
      </div>

      <!-- Email input-->
      <div class="form-group">
        <label class="col-md-3 control-label" for="email">Uw E-mail</label>
        <div class="col-md-9">
          <input id="email" name="email" type="text" placeholder="Hier uw email" class="form-control">
        </div>
      </div>

      <!-- Message body -->
      <div class="form-group">
        <label class="col-md-3 control-label" for="message">Uw bericht</label>
        <div class="col-md-9">
          <textarea class="form-control" id="message" name="message" placeholder="Hier uw bericht!" rows="5" style="resize:vertical;"></textarea>
        </div>
      </div>

      <!-- Form actions -->
      <div class="form-group">
        <div class="col-md-12 text-right">
          <button type="submit" class="btn btn-lg" style="background: white;">Submit</button>
        </div>
      </div>
    </fieldset>
    </form>
