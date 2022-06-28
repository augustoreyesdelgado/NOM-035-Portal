<?php /*Este archivo existe para hacer mas controlable la presentacion de las tablas*/ ?>
<TABLE style="font-family:Helvetica">
            
        <TR>
        <TD id="sit5" style="background-color: Gray">Acontecimiento traum&aacute;tico severo<p style="color:white">Fecha: <?php echo $arrayq1['fecha'];?></p></TD>
        <?php if(empty($arrayq1['c'])){?>
        <TD COLSPAN=3 id="sit" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
        <?php } else if(empty($arrayq1['r']) && $arrayq1['r']<2){?>
        <TD COLSPAN=3 id="sit5" style="background-color: #31ff31">No requiere atenci&oacute;n</TD>
        <?php }else { ?>
        <?php if($arrayq1['s1']>0){?>
            <TD id="sit5" style="background-color: #ff1818"><FONT SIZE=2><p>Requiere atenci&oacute;n: Secci&oacute;n II Recuerdos persistentes sobre acontecimiento</p></FONT></TD>
        <?php }?>
        <?php if($arrayq1['s2']>2){?>
        <TD id="sit5" style="background-color: #ff1818"><FONT SIZE=2><p>Requiere atenci&oacute;n: Secci&oacute;n III Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento</p></FONT></TD>
        <?php }?>
        <?php if($arrayq1['s3']>1){?>
        <TD id="sit5" style="background-color: #ff1818"><FONT SIZE=2><p>Requiere atenci&oacute;n: Secci&oacute;n IV Afectaci&oacute;n</p></FONT></TD>
        <?php }?>
        <?php } ?>  
        </TR>
            
        <?php if($nivel['n']==3){ 
        $arrayq3=$object_usuario->evaluar3();
        $arrayq2=$object_usuario->evaluar2();
        ?>
        <TR>
        <TD id="sit5" style="background-color: Blue">Factores de riesgo psicosocial general<p style="color:white">Fecha: <?php echo $arrayq2['fecha'];?></p></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else {?>
            <?php if($arrayq2['r']<20){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>El riesgo resulta despreciable por lo que no se requiere medidas adicionales.</p></FONT></TD>
            <?php }else if(20<=$arrayq2['r'] && $arrayq2['r']<45){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.</p></FONT></TD>
            <?php }else if(45<=$arrayq2['r'] && $arrayq2['r']<70){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.</p></FONT></TD>
            <?php }else if(70<=$arrayq2['r'] && $arrayq2['r']<90){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p></FONT></TD>
            <?php }else if($arrayq2['r']>=90){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p></FONT></TD><?php }?>
	    </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Ambiente de trabajo: <?php echo $arrayq2['r1'];?></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r1']<3){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(3<=$arrayq2['r1'] && $arrayq2['r1']<5){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(5<=$arrayq2['r1'] && $arrayq2['r1']<7){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(7<=$arrayq2['r1'] && $arrayq2['r1']<9){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r1']>=9){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Factores propios de la actividad: <?php echo $arrayq2['r2'];?></TD>
           <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r2']<10){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(10<=$arrayq2['r2'] && $arrayq2['r1']<20){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(20<=$arrayq2['r2'] && $arrayq2['r2']<30){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(30<=$arrayq2['r2'] && $arrayq3['r2']<40){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r2']>=40){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Organización del tiempo de trabajo: <?php echo $arrayq2['r3'];?></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r3']<4){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(4<=$arrayq2['r3'] && $arrayq2['r3']<6){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(6<=$arrayq2['r3'] && $arrayq2['r3']<9){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(9<=$arrayq2['r3'] && $arrayq2['r3']<12){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r3']>=12){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Liderazgo y relaciones en el trabajo: <?php echo $arrayq2['r4'];?></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r4']<10){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(10<=$arrayq2['r4'] && $arrayq2['r4']<18){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(18<=$arrayq2['r4'] && $arrayq2['r4']<28){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(28<=$arrayq2['r4'] && $arrayq2['r4']<38){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r4']>=38){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }}?>
        </TR>
    
    
    <TR>
        <TD id="sit5" style="background-color: Green">Entorno organizacional general:<p style="color:white">Fecha: <?php echo $arrayq3['fecha'];?></p></TD>
            <?php if(empty($arrayq3['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else {?>
            <?php if($arrayq3['r']<50){?>
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
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Ambiente de trabajo: <?php echo $arrayq3['r1'];?></TD>
            <?php if(empty($arrayq3['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq3['r1']<5){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(5<$arrayq3['r1'] && $arrayq3['r1']<9){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(9<=$arrayq3['r1'] && $arrayq3['r1']<11){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(11<=$arrayq3['r1'] && $arrayq3['r1']<14){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq3['r1']>=14){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Factores propios de la actividad: <?php echo $arrayq3['r2'];?></TD>
           <?php if(empty($arrayq3['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq3['r2']<15){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(15<$arrayq3['r2'] && $arrayq3['r1']<30){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(30<=$arrayq3['r2'] && $arrayq3['r2']<45){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(45<=$arrayq3['r2'] && $arrayq3['r2']<60){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq3['r2']>=60){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Organización del tiempo de trabajo: <?php echo $arrayq3['r3'];?></TD>
            <?php if(empty($arrayq3['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq3['r3']<5){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(5<$arrayq3['r3'] && $arrayq3['r3']<7){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(7<=$arrayq3['r3'] && $arrayq3['r3']<10){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(10<=$arrayq3['r3'] && $arrayq3['r3']<13){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq3['r3']>=13){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Liderazgo y relaciones en el trabajo: <?php echo $arrayq3['r4'];?></TD>
            <?php if(empty($arrayq3['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq3['r4']<14){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(14<$arrayq3['r4'] && $arrayq3['r4']<29){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(29<=$arrayq3['r4'] && $arrayq3['r4']<42){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(42<=$arrayq3['r4'] && $arrayq3['r4']<58){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq3['r4']>=58){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Entorno organizacional: <?php echo $arrayq3['r5'];?></TD>
            <?php if(empty($arrayq3['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq3['r5']<10){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(10<$arrayq3['r5'] && $arrayq3['r5']<14){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(14<=$arrayq3['r5'] && $arrayq3['r5']<18){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(18<=$arrayq3['r5'] && $arrayq3['r5']<23){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq3['r5']>=23){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }}?>
        </TR>
    
    
        <?php }else if($nivel['n']==2){ $arrayq2=$object_usuario->evaluar2(); ?>
            
        <TR>
        <TD id="sit5" style="background-color: Blue">Factores de riesgo psicosocial general<p style="color:white">Fecha: <?php echo $arrayq2['fecha'];?></p></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else {?>
            <?php if($arrayq2['r']<20){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>El riesgo resulta despreciable por lo que no se requiere medidas adicionales.</p></FONT></TD>
            <?php }else if(20<=$arrayq2['r'] && $arrayq2['r']<45){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.</p></FONT></TD>
            <?php }else if(45<=$arrayq2['r'] && $arrayq2['r']<70){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.</p></FONT></TD>
            <?php }else if(70<=$arrayq2['r'] && $arrayq2['r']<90){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p></FONT></TD>
            <?php }else if($arrayq2['r']>=90){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p></FONT></TD><?php }?>
	    </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Ambiente de trabajo: <?php echo $arrayq2['r1'];?></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r1']<3){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(3<=$arrayq2['r1'] && $arrayq2['r1']<5){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(5<=$arrayq2['r1'] && $arrayq2['r1']<7){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(7<=$arrayq2['r1'] && $arrayq2['r1']<9){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r1']>=9){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Factores propios de la actividad: <?php echo $arrayq2['r2'];?></TD>
           <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r2']<10){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(10<=$arrayq2['r2'] && $arrayq2['r1']<20){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(20<=$arrayq2['r2'] && $arrayq2['r2']<30){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(30<=$arrayq2['r2'] && $arrayq3['r2']<40){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r2']>=40){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Organización del tiempo de trabajo: <?php echo $arrayq2['r3'];?></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r3']<4){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(4<=$arrayq2['r3'] && $arrayq2['r3']<6){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(6<=$arrayq2['r3'] && $arrayq2['r3']<9){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(9<=$arrayq2['r3'] && $arrayq2['r3']<12){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r3']>=12){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <TR>
        <TD id="sit5" style="background-color: rgb(192,192,192)">Liderazgo y relaciones en el trabajo: <?php echo $arrayq2['r4'];?></TD>
            <?php if(empty($arrayq2['c'])){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(76, 102, 105)"><FONT SIZE=2><p>No se ha tomado este cuestionario.</p></FONT></TD>
            <?php } else if($arrayq2['r4']<10){?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(55, 229, 247)"><FONT SIZE=2><p>Nivle de riesgo: Nulo</p></FONT></TD>
            <?php }else if(10<=$arrayq2['r4'] && $arrayq2['r4']<18){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(107, 145, 10)"><FONT SIZE=2><p>Nivle de riesgo: Bajo</p></FONT></TD>
            <?php }else if(18<=$arrayq2['r4'] && $arrayq2['r4']<28){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 255, 0)"><FONT SIZE=2><p>Nivle de riesgo: Medio</p></FONT></TD>
            <?php }else if(28<=$arrayq2['r4'] && $arrayq2['r4']<38){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 192, 0)"><FONT SIZE=2><p>Nivle de riesgo: Alto</p></FONT></TD>
            <?php }else if($arrayq2['r4']>=38){ ?>
            <TD COLSPAN=3 id="sit6" style="background-color: rgb(255, 0, 0)"><FONT SIZE=2><p>Nivle de riesgo: Muy Alto</p></FONT></TD><?php }?>
        </TR>
        <?php }} ?>  
        
        <TR>
        <TD></TD>
        <TD COLSPAN=3><center><a href="../vista/seleccionc.php"><button id="sit5" id="boto2">Seleccionar Cuestionarios</button></a></center></TD>
        </TR>
	    </TABLE>