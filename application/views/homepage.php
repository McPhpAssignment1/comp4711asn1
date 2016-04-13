<div class = "row">
    <div class="span12">
        <img id="banner" src="/assets/images/banner.jpg" height="70px"/>
    </div>
    <div class="span3">
        <h4><u>Stocks Update</u></h4>
    </div>
    <div class="span9">
        <h4><u>Player Standings</u></h4>
    </div>
    
    <div class="span3">
        <table class="table table-hover">
            <thead>
                <th style="width: 50%">Stock</th>
                <th style="width: 50%">Value</th>
            </thead>
            {stock_list}
            <tr id="{name}">
                <td><a href="/history/{Code}">{name}</a></td>
                <td>{value}</td>
            </tr>
            {/stock_list}
        </table>
    </div>
    
    <div class="span9">
        <table class="table table-hover">
             <thead>
                <th style="width: 20%">Player</th>
                <th style="width: 20%">Cash</th>
                <th style="width: 20%">Equity</th>
                <th style="width: 20%">Net Worth</th>
                <th style="width: 10%"></th>
            </thead>
            {player_list}
            <tr id="{Player}">
                <td><a href="/profile/{Player}">{Player}</a></td>
                <td id="{Player}_cash">{Cash}</td>
                <td id="{Player}_eq">{Equity}</td>
                <td id="{Player}_net">{Net}</td>
                <td id="{Player}_pic"></td>
            </tr>
            {/player_list}
            <tr>
                <td style="font-size: 10px">
                    <img src="/assets/images/top_player.png" width="25px" height="25px"/> Highest Net worth
                </td>
                <td style="font-size: 10px">
                    <img src="/assets/images/top_cash.png" width="25px" height="25px"/> Highest Cash worth
                </td><td></td><td></td><td></td>
            </tr>
        </table>
    </div>
</div>