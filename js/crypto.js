$(document).ready(function () {
  var getPrice = (httprespons, inid) => {
    var id = parseInt(inid)
    price = httprespons['data'][id]['quote']['USD']['price']
    // console.log(httprespons['data'][id]['quote'])
    return price.toFixed(1)
  }

   var getname = (httprespons, inid) => {
    var id = parseInt(inid)
    price = httprespons['data'][id]['quote']['USD']['name']
    // console.log(httprespons['data'][id]['quote'])
    return price.toFixed(1)
  }

  var getPercentage = (httprespons, inid) => {
    var id = parseInt(inid)
    price = httprespons['data'][id]['quote']['USD']['percent_change_24h']
    return price.toFixed(2)
  }
  var successFunction = function (response) {
    // ripprice
    $('#btcprice').html('USD: ' + getPrice(response, 0))
    $('#liteprice').html('USD: ' + getPrice(response, 13))
    $('#ethprice').html('USD: ' + getPrice(response, 1))
    $('#bchprice').html('USD: ' + getPrice(response, 11))
    $('#ripprice').html('USD: ' + getPrice(response, 6))

    $('#btcperc').html(getPercentage(response, 0) + '%')
    $('#liteperc').html(getPercentage(response, 13) + '%')
    $('#ethperc').html(getPercentage(response, 1) + '%')
    $('#bchperc').html(getPercentage(response, 11) + '%')
    $('#ripperc').html(getPercentage(response, 6) + '%')

    // for(var i=0;i<20;i++){
    //   // console.log(getPrice(response, i));

    // }
   console.log(response['data'][1]['quote']);
    

  }

  $.ajax({
    url: 'app/Apis/api.php',
    dataType: 'json',
    method: 'GET',
    data: {
      "market": 'market',
    },
    cache: false,
    success: successFunction,
  })

})
