<div style="width:100%;">
	<?php
		echo $this->Session->flash('auth');
	?>
<table style="width:1200px;margin-left:auto;margin-right:auto;">
	<tr>
	<td style="text-align:right;width:250px;padding-right:50px">
		<?php if (Configure::read('MISP.welcome_logo')) echo $this->Html->image('custom/' . h(Configure::read('MISP.welcome_logo')), array('alt' => 'Logo', 'onerror' => "this.style.display='none';")); ?>
	</td>
	<td style="width:600px">
		<span style="font-size:18px;">
			<?php
				if (Configure::read('MISP.welcome_text_top')) {
					echo h(Configure::read('MISP.welcome_text_top'));
				}
			?>
		</span><br /><br />
		<?php if (Configure::read('MISP.main_logo') && file_exists(APP . '/webroot/img/custom/' . Configure::read('MISP.main_logo'))): ?>
			<img src="<?php echo $baseurl?>/img/custom/<?php echo h(Configure::read('MISP.main_logo'));?>" />
		<?php else: ?>
            <div class="nav" style="font-weight:bold; font-size:30px;text-align:center;">
				<span class="logoBlueStatic">M</span><span style="color: #000000;">alware</span>
				<span class="logoBlueStatic">I</span><span style="color: #000000;">nformation </span>
				<span class="logoBlueStatic">S</span><span style="color: #000000;">haring</span>
				<span class="logoBlueStatic">P</span><span style="color: #000000;">latform</span>
			</div>
		<?php endif;?>
		<?php
			if (true == Configure::read('MISP.welcome_text_bottom')) {
		?>
		<div style="text-align:right;font-size:18px;">
		<?php
				echo h(Configure::read('MISP.welcome_text_bottom'));
		?>
		</div>
		<div>
		<?php
			}
			echo $this->Form->create('User');
			echo $this->Form->inputs(array(
				'legend' => __('Login', true),
				'email' => array('autocomplete' => 'off'),
				'password' => array('autocomplete' => 'off')
			));
			echo $this->Form->button('Login', array('class' => 'btn btn-primary'));
			echo $this->Form->end();
		?>
		</div>
	</td>
	<td style="width:250px;padding-left:50px">
		<?php if (Configure::read('MISP.welcome_logo2')) echo $this->Html->image('custom/' . h(Configure::read('MISP.welcome_logo2')), array('alt' => 'Logo2', 'onerror' => "this.style.display='none';")); ?>
	</td>
	</tr>
	</table>
</div>
</div>
