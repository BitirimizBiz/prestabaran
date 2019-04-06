<script>
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
    function closeUpdateNotify(){
        $('#updateNotify').hide('5000');
    }
</script>
<style>
    .linkk {
        padding: 10px 15px;
        background: transparent;
        border: #bccfd8 1px solid;
        border-left: 0px;
        cursor: pointer;
        color: #607d8b
    }

    .disabled {
        cursor: not-allowed;
        color: #bccfd8;
    }

    .current {
        background: #bccfd8;
    }

    .first {
        border-left: #bccfd8 1px solid;
    }

    .answer {
        padding-top: 10px;
    }

    #pagination {
        margin-top: 20px;
        padding-top: 30px;
        border-top: #F0F0F0 1px solid;
    }

    .dot {
        padding: 10px 15px;
        background: transparent;
        border-right: #bccfd8 1px solid;
    }

</style>

{if $isupdated eq 1}
    <div id='updateNotify' class='alert alert-info' role='alert'>
        Uygulama Güncel
        <button id="updateNotifyClose" type="button" class="close" aria-label="Close" onclick='closeUpdateNotify()'>
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
{else}
    <div id='updateNotify' class='alert alert-warning' role='alert'>
        Eklenti Güncel Değil Yeni Sürümü <a href="https://www.netgsm.com.tr/Dokuman/" target="_blank">Buradan</a> İndirebilirsiniz.
        <button id="updateNotifyClose" type="button" class="close" aria-label="Close" onclick='closeUpdateNotify()'>
            <span aria-hidden="true">&times</span>
        </button>
    </div>
{/if}
<div id="bulksmstab" class="tab-pane fade in active" role="tabpanel"
     style="background-color: #fff; border-radius: 5px; border:1px solid #d3d8db; padding: 10px;">

    <form method="POST" action="{$form_url}">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4><span>{l s='Select Title' mod='netgsmsms'}</span></h4>
                <select id="title" name="title" class="form-control">
                    {$messageForm.title}
                </select>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4><span>{l s='Customize' mod='netgsmsms'}</span></h4>
                <select id="fields" onchange="addField()">
                    <option value="">{l s='Select' mod='netgsmsms'}</option>
                    {$messageForm.customize}
                </select>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h4><span>{l s='Message' mod='netgsmsms'}</span></h4>
                <textarea name="messageArea" id="messageArea" class="form-control style-1" rows="5"
                          style="resize: none; font-size: 15px;" data-toggle="tooltip"
                          data-placement="top"
                          title="{l s='Number of character is determined dynamically.' mod='netgsmsms'}"></textarea>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div style="padding-top: 70px;" align="center">
                    <input class="btn btn-success" type="submit" name="sendMessageButton"
                           value="{l s='Send Message' mod='netgsmsms'}">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="inputFirstName"
                                   style="font-size: 13px">{l s='Firstname' mod='netgsmsms'}</label>
                            {$searchArea.firstname}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="inputLastName"
                                   style="font-size: 13px">{l s='Lastname' mod='netgsmsms'}</label>
                            {$searchArea.lastname}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="inputCity"
                                   style="font-size: 13px">{l s='City' mod='netgsmsms'}</label>
                            {$searchArea.city}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="inputEmail"
                                   style="font-size: 13px">{l s='Email' mod='netgsmsms'}</label>
                            {$searchArea.email}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <label for="perpage" style="font-size: 13px">{l s='Limit' mod='netgsmsms'}</label>
                        <select id="perpage" name="perpage">
                            {$searchArea.limit}
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group" style="padding-top: 20px;" align="center">
                            <input type="submit" id="searchButton" class="btn btn-primary"
                                   value="{l s='Search' mod='netgsmsms'}"
                                   name="searchButton">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="table-responsive">
                    <h4><label for="inputEmail"
                               style="font-size: 15px">{l s='The phone numbers in the table belong to first recorded address for each customer.' mod='netgsmsms'}</label></h4>
                    <table class="table table-striped table-hover table-condensed"
                           style="border-collapse:separate; border-spacing:1px;">
                        <thead>
                        <tr>
                            <th style="border-radius: 5px ;background-color: #1a4d80;color: #fff" width="45">
                                <input type="checkbox" id="checkall0" class="big-checkbox" data-toggle="tooltip"
                                       data-placement="top" title="{l s='Select All' mod='netgsmsms'}">
                            </th>
                            <th style="border-radius: 5px;background-color: #1a4d80;color: #fff"> {l s='ID' mod='netgsmsms'}</th>
                            <th style="border-radius: 5px;background-color: #1a4d80;color: #fff"> {l s='Firstname' mod='netgsmsms'}</th>
                            <th style="border-radius: 5px;background-color: #1a4d80;color: #fff"> {l s='Lastname' mod='netgsmsms'}</th>
                            <th style="border-radius: 5px;background-color: #1a4d80;color: #fff"> {l s='Phone' mod='netgsmsms'}</th>
                            <th style="border-radius: 5px;background-color: #1a4d80;color: #fff"> {l s='City' mod='netgsmsms'}</th>
                            <th style="border-radius: 5px;background-color: #1a4d80;color: #fff"> {l s='Email' mod='netgsmsms'}</th>
                        </tr>
                        </thead>
                        {$table.body}
                    </table>
                </div>
                <div style="padding-top: 20px;">
                    {$table.pagination}
                </div>
                <div style="padding-top: 20px;">
                    {$table.hiddens}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-6 col-md-2">
                <label for="groupName"
                       style="font-size: 13px">{l s='Group Name' mod='netgsmsms'}</label>
                <input type="text" class="form-group" data-toggle="tooltip"
                       data-placement="top" value='{$groupName}'
                       title="{l s='Enter group name. If you entered before it will be filled automatically.' mod='netgsmsms'}"
                       name="groupName">
            </div>

            <div class="col-sm-6 col-xs-6 col-md-2" style="padding-top: 23px;">
                <input type="submit" class="btn btn-success" value="{l s='Add To Group' mod='netgsmsms'}"
                       name="addToGroup" data-toggle="tooltip"
                       data-placement="top" title="{l s='Adds the selected customer to the group' mod='netgsmsms'}">
            </div>
            <div class="col-md-6"></div>
        </div>

    </form>
</div>


<script>


    var customers = [];
    var customersIndex = [];

    $(document).ready(function () {

        if ($('#customers').val() !== "" && $('#customers').val() !== "null") {
            customers = JSON.parse($('#customers').val());
            sessionStorage.setItem('customers', JSON.stringify(customers));
            console.log("not empty");
        } else {
            $('#customers').val((sessionStorage.getItem('customers')));
            customers = JSON.parse(sessionStorage.getItem('customers'));
            console.log("empty");
        }


        console.log($('#customers').val());
        if (JSON.parse(sessionStorage.getItem('customers'))) {

            var tableBody = document.getElementById('tableBody');
            customers = JSON.parse(sessionStorage.getItem('customers'));

            for (var i = 0, row; row = tableBody.rows[i]; i++) {
                if (customers.includes(parseInt(row.cells[1].childNodes[0].textContent))) {
                    row.cells[0].childNodes[0].checked = true;
                }
            }
        } else {
            customers = [];
        }

    });

    function changeActiveTab(element) {

    }

    function addField() {
        document.getElementById('messageArea').value += document.getElementById('fields').value;
    }

    $("#checkall0").click(function () {
        $("input:checkbox").not(this).prop('checked', this.checked);
        if (this.checked == true) {
            customers = JSON.parse($('#allcustomers').val());
        } else
            customers = [];

        $('#customers').val(JSON.stringify(customers));
        sessionStorage.setItem('customers', JSON.stringify(customers));
        console.log(customers);
    });

    function addCustomer(e) {

        var id = $(e).closest('tr').find('td:nth-child(2)').text();

        if (e.checked == true) {
            customers.push(parseInt(id));
            sessionStorage.setItem('customers', JSON.stringify(customers));
        } else {
            index = customers.indexOf(parseInt(id));
            if (index > -1) {
                customers.splice(index, 1);
                sessionStorage.setItem('customers', JSON.stringify(customers));
            }
        }

        $('#customers').val(JSON.stringify(customers));
        console.log('customers ');
        console.log(customers);

    }


</script>