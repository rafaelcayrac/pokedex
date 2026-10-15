<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pokemon</title>
</head>
<body>
	<h1>Pokémons disponibles</h1>

	<table>
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Taille</th>
			<th>Poids</th>
			<th>PV</th>
			<th>Genre</th>
			<th>Date de capture</th>
			<th>Niveau</th>
			<th>Shiny</th>
			<th>Image</th>
		</tr>
		@foreach($pokemons as $pokemon)

		<tr>
			<td>{{ $pokemon->id }}</td>
			<td>{{ $pokemon->name }}</td>
			<td>{{ $pokemon->height }}</td>
			<td>{{ $pokemon->weight }}</td>
			<td>{{ $pokemon->life }}</td>
			<td>{{ $pokemon->genre ? 'Femelle' : 'Male' }}</td>
			<td>{{ $pokemon->captured_at }}</td>
			<td>{{ $pokemon->level }}</td>
			<td>{{ $pokemon->is_shiny ? 'Oui' : 'Non'}}</td>
			<td><img width="150" src="{{ $pokemon->image }}" alt="Image {{ $pokemon->name }}"></td>
		</tr>
		@endforeach
	</table>


	

</body>
</html>