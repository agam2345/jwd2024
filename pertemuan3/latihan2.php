<?php 
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

$x = 2;
if( $x < 20 ) {
	echo "benar";
} else if( $x == 20 ) {
	echo "bingo!";
} else {
	echo "salah";
}

?>

<?php for( $i = 1; $i <= 5; $i++ ) : ?>
		<?php if( $i % 2 == 0 ) : ?>
			<tr class="warna-baris">
		<?php else : ?>
			<tr>
		<?php endif; ?>
			<?php for( $j = 1; $j <= 5; $j++ ) : ?>
				<td><?= "$i, $j"; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>