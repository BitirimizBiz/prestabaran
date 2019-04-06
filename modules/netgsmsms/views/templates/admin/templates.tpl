<script>
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });


</script>

<ul class="nav nav-tabs">
    {if $isLogin eq 1}
        <li><a data-toggle="tab" href="#configurationTab">{l s='Configuration' mod='netgsmsms'}</a></li>
        <li class="active"><a data-toggle="tab" href="#templatesTab">{l s='Templates' mod='netgsmsms'}</a></li>
    {else}
        <li class="active"><a data-toggle="tab" href="#configurationTab">{l s='Configuration' mod='netgsmsms'}</a></li>
        <li><a data-toggle="tab" href="#templatesTab">{l s='Templates' mod='netgsmsms'}</a></li>
    {/if}
</ul>


<div class="tab-content">
    {if $isLogin eq 1}
        <div id="configurationTab" class="tab-pane fade">
            {$configurationTab}
        </div>
    {else}
        <div id="configurationTab" class="tab-pane fade in active">
            {$configurationTab}
        </div>
    {/if}
    {if $isLogin eq 1}
    <div id="templatesTab" class="tab-pane fade in active"
         style="background-color: #fff; border-radius: 5px; border:1px solid #d3d8db">
        {else}
        <div id="templatesTab" class="tab-pane fade"
             style="background-color: #fff; border-radius: 5px; border:1px solid #d3d8db; ">
            {/if}
            <form name="templateTableForm" id="templateTableForm" method="POST"
                  action="{$form_url|escape:'htmlall':'UTF-8'|replace:'&amp;':'&'}">
                <div class="row">
                    <div class="col-md-12 cold-sm-12 col-xs-12">
                        <br>
                        <div class="table-responsive">

                            <table class="table table-striped table-hover table-condensed" id="templateTable"
                                   style="border-collapse:separate; border-spacing:1px; padding: 10px;">
                                <thead>
                                <tr>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff">{l s='ID' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff">{l s='Name' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff">{l s='Template' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff;">{l s='Description' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff; display: none;">{l s='Variables' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff;">{l s='Status' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff; display: none;">{l s='Type' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff; display: none;">{l s='Admin Gsm' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff; display: none;">{l s='Title' mod='netgsmsms'}</th>
                                    <th style="border-radius: 5px;background-color: #1a4d80;color: #fff">{l s='Edit' mod='netgsmsms'}</th>
                                </tr>
                                </thead>
                                {$templateTable.body}
                            </table>
                        </div>
                    </div>
                </div>
            </form>

            <div class="modal fade" id="templateModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form method="POST" name="templateModalForm" id="templateModalForm"
                          action="{$form_url|escape:'htmlall':'UTF-8'|replace:'&amp;':'&'}">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="templateModalHeader"></h4>
                                <input type="hidden" name="templateId" id="templateId">
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">

                                        <h4><span>{l s='Select Title' mod='netgsmsms'}</span></h4>
                                        <select id="title" name="title" required class="form-control">
                                            {foreach from=$titles item=title}
                                                <option value="{$title}">{$title}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <h4><span>{l s='Customize' mod='netgsmsms'}</span></h4>
                                        <select id="smsFields" class="form-control" onchange="addField(this)">
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <h4><span>{l s='Status' mod='netgsmsms'}</span></h4>
                                        <input type="checkbox" name="templateStatus" id="templateStatus"
                                               onchange="changeStatus(this)"
                                               style="width: 24px; height: 22px;">
                                        <span class="label"
                                              style="background-color:#9D5351; margin-left: 20px; font-size: 17px;"
                                              id="deactiveCheckbox">{l s='Deactive' mod='netgsmsms'}</span>
                                        <span class="label"
                                              style="background-color:#7dc13c; margin-left: 20px; font-size: 17px;"
                                              id="activeCheckbox">{l s='Active' mod='netgsmsms'}</span>
                                    </div>
                                </div>
                                <br>
                                <div class="row" style="display: none;" id="adminGsmRow">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h4><span>{l s='Admin GSM' mod='netgsmsms'}</span></h4>
                                        <input type="text" name="admingsm" id="admingsm" data-toggle="tooltip"
                                               data-placement="top"
                                               title="{l s='Put comma between numbers, If you want to enter more than one.' mod='netgsmsms'}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h4><span>{l s='Message' mod='netgsmsms'}</span></h4>
                                        <textarea required name="templateMessageArea" id="templateMessageArea"
                                                  class="form-control"
                                                  rows="4" cols="75"
                                                  style="resize: none;"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h4><span>{l s='Description' mod='netgsmsms'}</span></h4>
                                        <p style="display: block;" id="descriptionText" class="form-text text-muted">
                                            {l s='Template Description : ' mod='netgsmsms'}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="row">
                                    <button type="button" class="btn btn-default"
                                            data-dismiss="modal">{l s='Cancel' mod='netgsmsms'}</button>
                                    <input type="submit" class="btn btn-success" name="saveTemplate"
                                           value="{l s='Save' mod='netgsmsms'}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $("#templateTableForm").on("change", "input:checkbox", function () {
                $("#templateTableForm").submit();
            });
        });

        function callModal(element) {
            var id = $(element).closest('tr').find('td:nth-child(1)').text();
            var name = $(element).closest('tr').find('td:nth-child(2)').text();
            var template = $(element).closest('tr').find('td:nth-child(3)').text();
            var description = $(element).closest('tr').find('td:nth-child(4)').text();
            var variables = $(element).closest('tr').find('td:nth-child(5)').text();
            var status = $(element).closest('tr').find('td:nth-child(6)').text();
            var type = $(element).closest('tr').find('td:nth-child(7)').text();
            var admingsm = $(element).closest('tr').find('td:nth-child(8)').text();
            var title = $(element).closest('tr').find('td:nth-child(9)').text();

            if (type === 'admin')
                document.getElementById('adminGsmRow').style.display = 'block';
            else {
                document.getElementById('adminGsmRow').style.display = 'none';
            }
            if (status === "Pasif") {
                document.getElementById('templateStatus').checked = false;
                document.getElementById('templateStatus').value = 0;
                $("#activeCheckbox").css('display','none')
                $("#deactiveCheckbox").css('display','inline-block')
            } else if (status === "Aktif") {
                document.getElementById('templateStatus').checked = true;
                document.getElementById('templateStatus').value = 1;
                $("#activeCheckbox").css('display','inline-block')
                $("#deactiveCheckbox").css('display','none')
            }
            var variableArr = variables.split(',');
            document.getElementById('smsFields').innerHTML = '';
            for (var i = 0; i < variableArr.length - 1; i++) {
                var keyandvalue = variableArr[i].split(':');
                document.getElementById('smsFields').innerHTML += '<option value="' + keyandvalue[0] + '">' + keyandvalue[1] + '</option>';
            }
            document.getElementById('admingsm').value = admingsm;
            document.getElementById('descriptionText').innerText = description;
            document.getElementById('templateMessageArea').innerText = template;
            document.getElementById('templateModalHeader').innerText = id + '. ' + name;
            document.getElementById('templateId').value = id;

            if (title !== '')
                $('#title').val(title);


            var fileName = $(element).data("file");
            $("#templateModal").data("fileName", fileName).modal("toggle", $(element));
        }

        function addField(element) {
            var f = document.getElementById('smsFields').value;
            f = " (" + f + ") ";
            document.getElementById("templateMessageArea").value += f;
        }

        function changeStatus(element) {

            if (parseInt(element.value) == 0) {
                element.value = 1;
                $("#activeCheckbox").css('display','inline-block')
                $("#deactiveCheckbox").css('display','none')
            } else if (parseInt(element.value) == 1){
                element.value = 0;
                $("#activeCheckbox").css('display','none')
                $("#deactiveCheckbox").css('display','inline-block')
            }
        }


    </script>