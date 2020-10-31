<?php declare(strict_types=1); 

function getPermissionsByRole(string $role) :Array{
	$permissions = [
		'admin' => [
				'Puede crear usuarios',
				'Puede actualizar usuarios',
				'Puede eliminar usuarios',
				'Puede visualizar usuarios'
		],
		'moderator' => [
				'Puede actualizar usuarios',
				'Puede visualizar usuarios'
		]
	];
	return $permissions[$role] ?? [
			'Puede visualizar usuarios'
	]; 
 }

 var_dump(getPermissionsByRole('admin'));
 print "\n";
  var_dump(getPermissionsByRole('moderator'));
  print "\n";
  var_dump(getPermissionsByRole('guest'));
 ?>
