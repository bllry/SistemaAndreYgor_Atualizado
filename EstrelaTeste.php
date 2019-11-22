<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <title>Estrela teste</title>
    
    
<script>
    
    $(function) { 
    
    $('.quest .content[data-element]').each(function(index, item) {
		
		// Recupera o seletor do input relacionado e os elementos
		var selector = $(item).data('element'),
			stars_element = $('<div class="stars"></div>'),
			select = $(selector),
			options = select.find('option'),
			selected = select.find('option:selected');
		
		// Percorre as opções do select
		options.each(function(option_index, option) {
			// Adiciona uma estrela para cada opção
			var star = $('<div data-value="' + $(this).val() + '" class="star"></div>');
			stars_element.append(star);
			
			// Ao clicar na estrela
			star.on('click', function() {
				
				// Recupera o valor clicado
				var val = $(this).data('value');
				
				// Remove a seleção atual do select e adiciona o da estrela clicada
				select.find('option').attr('selected', false);
				select.find('option[value="' + val + '"]').attr('selected', true);
				
				// Remove as classes de seleção da estrela
				$(stars_element).find('.star').removeClass('selected');
				var index = $(this).index(),
					elements = $(stars_element).find('.star');
				
				// Adiciona a seleção à estrela correspondente e as anteriores à ela
				for(i=0; i<=index; i++) {
					$(stars_element).find('.star:nth-child(' + (i+1) + ')').addClass('selected');
				}
			});
		});
		
		// Adiciona o elemento novo e remove o antigo (select)
		select.after(stars_element);
		select.hide();
	});}
        
</script>    
    
    <style>

    .ratestar .stars .star {
	display: inline-block;
	width: 15px;
	height: 15px;
	background: #fff url(../images/sprite.png) -2px -134px no-repeat;
	margin-right: 3px;
	cursor: pointer;
}

.ratestar .stars .star.selected {
	background: #fff url(../images/sprite.png) -23px -134px no-repeat;
}

</style>

</head>


<body>

    <div class="quest ratestar">
        <div class="content" data-element="#quest2"></div>
        <select name="quest2" id="quest2">
            
            <option value="1">Ruim</option>
            <option value="2">Ok</option>
            <option value="3">Bom</option>
            <option value="4">Quase ótimo</option>
            <option value="5">Òtimo</option>
        </select>
    </div>

</body>
</html>