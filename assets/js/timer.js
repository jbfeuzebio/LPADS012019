$(function(){
	function num(number){
		return (number >= 10) ?  number : '0'+number;
	}

	function converteEmTempo(segundos){
		var hora = Math.floor((segundos/3600));
		var qtdSec = hora*3600;
		var restante = segundos-qtdSec;

		var minutos = Math.floor((restante/60));
		qtdSec = minutos*60;
		var segundos = restante-qtdSec;

		return num(hora)+':'+num(minutos)+':'+num(segundos);
	}

	function converteEmSegundos(time){
		var tempo = time.split(':');

		var horaSec = (tempo[0]*60)*60;
		var minSec = (tempo[1]*60);
		return horaSec+minSec+Number(tempo[2]);
	}

	var segundos = converteEmSegundos('00:00:10');
	var t = setInterval(function(){
		segundos -= 1;
		$('.timer p').html(converteEmTempo(segundos));
		if(segundos == 0){
			
			var icon = '<?= base_url('assets/imagens/sancall.png');?>';
			var title = 'Atenção RH';
			var mensagem = 'Há funcionarios com periodo de teste vencido';
			var link = '';
			notifyMe(icon, title, mensagem, link);
			clearInterval(t);
		}
	}, 20);
});