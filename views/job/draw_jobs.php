<? if (!empty($jobs)): ?>
	<table class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Status</th>
				<th>Elapsed</th>
				<th>Progress</th>
				<th>Bot</th>
				<th>Manage</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($jobs AS $row): ?>
				<? $j = $row['Job'] ?>
				<? $bot = $j->getBot() ?>
				<tr>
					<td><?=$j->id?></td>
					<td><?=$j->getLink()?></td>
					<td><?=$j->getStatusHTML()?></td>
					<td><?=$j->getElapsedText()?></td>
					<td align="right" style="width: 300px">
						<div class="progress progress-striped">
						  <div class="bar" style="width: <?=round($j->get('progress'))?>%;"></div>
						</div>
					</td>
					<? if ($bot->isHydrated()): ?>
						<td><?=$bot->getLink()?></td>
					<? else: ?>
						<td>n/a</td>
					<?endif?>
					<td>
						<? if ($j->get('status') == 'available'): ?>
							<a class="btn btn-mini" href="<?=$j->getUrl()?>/edit"><i class="icon-cog"></i> edit</a>
						<? endif ?>
						<? if ($j->get('status') != 'taken'): ?>
							<a class="btn btn-mini" href="<?=$j->getUrl()?>/delete"><i class="icon-remove"></i> delete</a>
						<? endif ?>
						<a class="btn btn-mini" href="/job/create/file:<?=$j->get('file_id')?>"><i class="icon-repeat"></i> re-run</a>
					</td>
				</tr>
			<?endforeach?>
		</tbody>
	</table>
<? else: ?>
	<b>No pending jobs.</b>
<? endif ?>