{* <h1> Hello from smarty </h1>
name is {$name} *}
{* <h2>{$lineItem}</h2> *}
{* {foreach from=$lineItem item=item key=key}
    item os {$item} - {$item}
    <br />
    key os {$key}
{/foreach} *}


    <div style="padding: 10px 0" id="lineItemAdd">
        
            <div class="col-xs-12">
                <div class="col-xs-12 email-address-add-line-container emailaddresses">
                    <button type="button" class="btn btn-danger" title="Line item" onclick="addLineItemHandlers(this)">
                        <span class="suitepicon suitepicon-action-plus"></span><span></span>
                    </button>
                </div>
                {foreach from=$items key=myId item=i}
                    <div class="input-group email-address-input-group email-address-line-container lineItem">
                        <input type="text" id="foo01" name="itemText[]" value="{$i.itemName}" width="80%" />
                        <textarea id="foo02" name="itemDescription[]" width="100%" style="width:100%">{$i.itemDes}</textarea>
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger email-address-remove-button removeItem"
                                onclick="removeLineItemHandlers(this)" name="0" title="Line Item" tabindex="0" enabled="true"
                                data-row="LineItem">
                                <span class="suitepicon suitepicon-action-minus"></span>
                            </button>
                        </div>
                    </div>
                {/foreach}
            </div>
        
    </div>

{literal}
    <script type="text/javascript" src="custom/modules/Accounts/LineItems/line_items.js"></script>
{/literal}