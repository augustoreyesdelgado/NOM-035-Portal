<table>        <TR>
        <TD id="sit5" style="background-color: Green">Entorno organizacional general: <?php echo $arrayq3['r'];?></TD>
            <?php if(empty($arrayq3['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq3['r']<50){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>El riesgo resulta despreciable por lo que no se requiere medidas adicionales.</p></FONT></TD>
            <?php }else if(50<$arrayq3['r'] && $arrayq3['r']<75){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.</p></FONT></TD>
            <?php }else if(75<=$arrayq3['r'] && $arrayq3['r']<99){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.</p></FONT></TD>
            <?php }else if(99<=$arrayq3['r'] && $arrayq3['r']<140){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p></FONT></TD>
            <?php }else if($arrayq3['r']>140){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p></FONT></TD><?php }?>
	      </TR>
</table>