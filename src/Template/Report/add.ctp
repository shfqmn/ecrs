<div class="row">
    <script>
        ip = <?= count($report->problem)==0? 0:count($report->problem) ?>;
        is = 1;
        $(function() {
            $('#addProblemBtn').click(function() {
                $('#problems').find('.collapse.in').collapse({
                    parent: '#problems',
                    toggle: true
                });
                $('#problems').find('.collapse.in').collapse('toggle');
                $('#problems').append($.parseHTML("<div class=\"panel panel-default\"><div class=panel-heading><h4 class=panel-title><a data-parent=#problems data-toggle=collapse href=#problem" + ip + ">Perkara\/Isu " + (ip + 1) + "<span class=\"glyphicon glyphicon-plus\"><\/span><\/a><\/h4><\/div><div class=\"collapse in panel-collapse\"id=problem" + ip + "><div class=panel-body><div class=form-group><label for=problem[" + ip + "][details]>Perkara\/Isu :<\/label><div class=\"input text\"><input class=form-control id=problem[" + ip + "][details name=problem[" + ip + "][details] ><\/div><\/div><div class=form-group><label for=problem[" + ip + "][datetime]>Tarikh & Masa :<\/label><div style=position:relative><div class=\"input  text\"><input class=form-control id=problem[" + ip + "][datetime] name=problem[" + ip + "][datetime]  maxlength=255><\/div><\/div><\/div><div class=form-group><label for=problem[" + ip + "][venue]>Venue :<\/label><div class=\"input  text\"><input class=form-control id=problem[" + ip + "][venue] name=problem[" + ip + "][venue]  maxlength=255><\/div><\/div><div class=form-group><label for=problem[" + ip + "][action]>Tindakan :<\/label><div class=\"input  text\"><input class=form-control id=problem[" + ip + "][action] name=problem[" + ip + "][action] ><\/div><\/div><div class=form-group><label for=problem[" + ip + "][notes]>Cacatan :<\/label><div class=\"input  text\"><input class=form-control id=problem[" + ip + "][notes] name=problem[" + ip + "][notes] ><\/div><\/div><\/div><\/div><\/div>"));
                $('#problem\\[' + ip + '\\]\\[datetime\\]').datetimepicker({
                    format: 'MMMM, YYYY',
                    viewMode: 'months'
                });
                ip++;
            });
            $('#addSickBtn').click(function() {
                $('#sicks').find('.collapse.in').collapse({
                    parent: '#sicks',
                    toggle: true
                });
                $('#sicks').find('.collapse.in').collapse('toggle');
                $('#sicks').append($.parseHTML("<div class=\"panel panel-default\"><div class=panel-heading><h4 class=panel-title><a data-parent=#sicks data-toggle=collapse href=#sick" + is + ">Pelajar Sakit " + (is + 1) + " <span class=\"glyphicon glyphicon-plus\"><\/span><\/a><\/h4><\/div><div class=\"collapse in panel-collapse\"id=sick" + is + "><div class=panel-body><div class=form-group><label for=sick[" + is + "][datetime]>Tarikh & Masa :<\/label><div style=position:relative><div class=\"input  text\"><input class=form-control id=sick[" + is + "][datetime] name=sick[" + is + "][datetime] ><\/div><\/div><\/div><div class=form-group><label for=sick[" + is + "][name]>Nama :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][name] name=sick[" + is + "][name]  maxlength=1" + is + "" + is + "><\/div><\/div><div class=form-group><label for=sick[" + is + "][ic]>No K\/P :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][ic] name=sick[" + is + "][ic]  maxlength=2" + is + "><\/div><\/div><div class=form-group><label for=sick[" + is + "][homeAddress]>Alamat (R) :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][homeAddress] name=sick[" + is + "][homeAddress] ><\/div><\/div><div class=form-group><label for=sick[" + is + "][studentNo]>No.Pelajar :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][studentNo] name=sick[" + is + "][studentNo]  maxlength=2" + is + "><\/div><\/div><div class=form-group><label for=sick[" + is + "][tel]>No. Tel. :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][tel] name=sick[" + is + "][tel]  maxlength=2" + is + "><\/div><\/div><div class=form-group><label for=sick[" + is + "][collegeAddress]>Alamat Kolej :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][collegeAddress] name=sick[" + is + "][collegeAddress] ><\/div><\/div><div class=form-group><label for=sick[" + is + "][courseCode]>Kod Khusus :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][courseCode] name=sick[" + is + "][courseCode]  maxlength=1" + is + "><\/div><\/div><div class=form-group><label for=sick[" + is + "][notes]>Laporan :<\/label><div class=\"input  text\"><input class=form-control id=sick[" + is + "][notes] name=sick[" + is + "][notes]  maxlength=1" + is + "" + is + "" + is + "" + is + "" + is + "><\/div><\/div><\/div><\/div><\/div>"));
                $('#sick\\[' + is + '\\]\\[datetime\\]').datetimepicker({
                    format: 'DD/MM/YYYY h:mm A',

                    ignoreReadonly: true
                });
                is++;
            });
            $('#reportDate').datetimepicker({
                format: 'MMMM, YYYY',
                viewMode: 'months'
            });
            $('#workingDates').datepicker({
                format: 'd/m/yy',
                multidate: true
            });
        });

    </script>
    <div class="container">
        <h2>Add Report</h2>
        <?= $this->Form->create($report) ?>
            <div class="form-group">
                <label>Bulan Laporan :</label>
                <div class="form-group">
                    <div style="position: relative">
                        <?= $this->Form->control('reportDate',['type'=>'text','label'=>false,'class'=>'form-control','id'=>'reportDate']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="workingDates">Date of Duty :</label>
                    <?= $this->Form->control('workingDates',['type'=>'text','label'=>false,'class'=>'form-control','id'=>'workingDates']) ?>
                </div>
                <h2>Borang Laporan Bulanan PPP / Pegawai / Staf </h2>
                <div class="panel-group" id="problems">
                    <?php foreach($report->problem as $i=>$problem): ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#problems" href="#problem<?=$i?>">Perkara/Isu <?=$i+1?><span class="glyphicon glyphicon-plus"></span></a>
                    </h4> </div>
                            <div id="problem<?=$i?>" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="problem[<?=$i?>][details]">Perkara/Isu :</label>
                                        <?= $this->Form->control('problem.'.$i.'.details',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'problem['.$i.'][details']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="problem[<?=$i?>][datetime]">Tarikh & Masa :</label>
                                        <div style="position: relative">
                                            <?= $this->Form->control('problem.'.$i.'.datetime',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'problem['.$i.'][datetime]']) ?>
                                        </div>
                                        <script type="text/javascript">
                                            $(function() {
                                                $('#problem\\[<?=$i?>\\]\\[datetime\\]').datetimepicker({
                                                    format: 'DD/MM/YYYY h:mm A'
                                                });
                                            });

                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="problem[<?=$i?>][venue]">Venue :</label>
                                        <?= $this->Form->control('problem.'.$i.'.venue',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'problem['.$i.'][venue]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="problem[<?=$i?>][action]">Tindakan :</label>
                                        <?= $this->Form->control('problem.'.$i.'.action',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'problem['.$i.'][action]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="problem[<?=$i?>][notes]">Cacatan :</label>
                                        <?= $this->Form->control('problem.'.$i.'.notes',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'problem['.$i.'][notes]']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                </div>
                <button type="button" class="btn btn-default" id="addProblemBtn">Add Row</button>
                <h2>Laporan Pelajar Sakit </h2>
                <div class="panel-group" id="sicks">
                    <?php foreach($report->sick as $i=>$sick): ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#sicks" href="#sick<?=$i?>">Pelajar Sakit <?=$i+1?> <span class="glyphicon glyphicon-plus"></span></a>
                                            </h4> </div>
                            <div id="sick<?=$i?>" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][datetime]">Tarikh & Masa :</label>
                                        <div style="position: relative">
                                            <?= $this->Form->control('sick.'.$i.'.datetime',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][datetime]']) ?>
                                        </div>
                                        <script type="text/javascript">
                                            $(function() {
                                                $('#sick\\[<?=$i?>\\]\\[datetime\\]').datetimepicker({
                                                    format: 'DD/MM/YYYY h:m A'
                                                });
                                            });

                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][name]">Nama :</label>
                                        <?= $this->Form->control('sick.'.$i.'.name',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][name]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][ic]">No K/P :</label>
                                        <?= $this->Form->control('sick.'.$i.'.ic',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][ic]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][homeAddress]">Alamat (R) :</label>
                                        <?= $this->Form->control('sick.'.$i.'.homeAddress',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][homeAddress]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][studentNo]">No.Pelajar :</label>
                                        <?= $this->Form->control('sick.'.$i.'.studentNo',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][studentNo]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][tel]">No. Tel. :</label>
                                        <?= $this->Form->control('sick.'.$i.'.tel',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][tel]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][collegeAddress]">Alamat Kolej :</label>
                                        <?= $this->Form->control('sick.'.$i.'.collegeAddress',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][collegeAddress]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][courseCode]">Kod Khusus :</label>
                                        <?= $this->Form->control('sick.'.$i.'.courseCode',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][courseCode]']) ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sick[<?=$i?>][notes]">Laporan :</label>
                                        <?= $this->Form->control('sick.'.$i.'.notes',['required'=>'false','type'=>'text','label'=>false,'class'=>'form-control','id'=>'sick['.$i.'][notes]']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                </div>
                <button type="button" class="btn btn-default" id="addSickBtn">Add Row</button>
                <button class="btn btn-success btn btn-default" type="submit">Submit</button>
            </div>
            <?= $this->Form->end() ?>
    </div>
</div>
