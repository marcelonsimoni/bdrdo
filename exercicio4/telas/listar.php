<div class="linha-tarefa" style="background-color:#f3f3f3">
	<div class="total-tarefa"><strong>TOTAL</strong></div>
    <div class="titulo-tarefa"><strong>TÍTULO</strong></div>
    <div class="prioridade-tarefa" align="center" onclick="AlteraPrioridade();" style="cursor:pointer"><div style="float:left"><strong>PRIORIDADE</strong></div><div style="float:left; margin-left:1px; "><img src="images/up.png" id="img-ordem-tarefas" width="16"/></div></div>

</div>
<div id="load-tarefas">
</div>
<script language="javascript">
    var PRIORI = 1;
    $("#load-tarefas").load("telas/tarefas.php"); 
	
	function AlteraPrioridade(){
	    PRIORI = (PRIORI == 1)?2:1;
        if(PRIORI == 1)
		    $("#img-ordem-tarefas").attr('src','images/up.png');
        else
            $("#img-ordem-tarefas").attr('src','images/down.png');
		$("#load-tarefas").load("telas/tarefas.php",{O:PRIORI});
	}
</script>