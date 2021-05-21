 <h4>Entry number: <?php echo user('entrant_id'); ?></h4>
<h3>Entrant information</h3>



<div class="container userinfo_container">


	<div>
	<div class="col-xs-2 flabel">Name:</div>
	<div class="col-xs-10  fdata"><?php echo user('salutation'); ?> <?php echo user('firstname'); ?> <?php echo user('lastname'); ?> </div>
	</div>

	<div>
	<div class="col-xs-2 flabel">Honours:</div>
	<div class="col-xs-10 fdata">{{ $application->honours<?php echo user('honours'); ?>&nbsp;</div>
	</div>

	<div>
	<div class="col-xs-2 flabel">Address:</div>
	<div class="col-xs-10 fdata"><?php echo nl2br(user('address')); ?></div>
	</div>

	<div>
	<div class="col-xs-2 flabel">City:</div>
	<div class="col-xs-10 fdata"><?php echo user('city'); ?></div>
	</div>

	<div>
	<div class="col-xs-2 flabel">Postcode:</div>
	<div class="col-xs-10 fdata"><?php echo user('postcode'); ?></div>
	</div>

	<div>
	<div class="col-xs-2 flabel">State:</div>
	<div class="col-xs-10 fdata"><?php echo user('state'); ?></div>
	</div>

	<div>
	<div class="col-xs-2 flabel">Phone:</div>
	<div class="col-xs-10 fdata"><?php echo user('phone'); ?></div>
	</div>

	<div>
	<div class="col-xs-2 flabel">Email:</div>
	<div class="col-xs-10 fdata"><?php echo user('email'); ?></div>
	</div>

	
</div>

