<div class="accordion" id="akordeon-radio">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-dark btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Zobacz Ramówkę
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#akordeon-radio">
      <div class="card-body">
		<div class="embed-responsive embed-responsive-1by1">
			<iframe class="embed-responsive-item" src="https://<?PHP echo $panel ?>.panelradiowy.pl/embed.php?script=ramowka"></iframe>
		</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-warning btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Zobacz Ekpię
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#akordeon-radio">
      <div class="card-body">
        		<div class="embed-responsive embed-responsive-1by1">
			<iframe class="embed-responsive-item" src="https://<?PHP echo $panel ?>.panelradiowy.pl/embed.php?script=ekipa"></iframe>
		</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn radio-kolor btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Zobacz Listę przebojów
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#akordeon-radio">
      <div class="card-body">
        		<div class="embed-responsive embed-responsive-1by1">
			<iframe class="embed-responsive-item" src="https://<?PHP echo $panel ?>.panelradiowy.pl/embed.php?script=lista"></iframe>
		</div>
      </div>
    </div>
  </div>
</div>