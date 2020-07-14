function addNguoiThan(){
                $('#btnThemNguoiThue').click(function(e){
                    var name = $('#tennguoithue1').val();
                    var cmnd = $('#cmnd1').val();
                    var dob = $('#dob1').val();
                    var quequan = $('#quequan1').val();
                    var sodienthoai = $('#sodienthoai1').val();
                    var sex = $('#sex').val();
                    var objNguoiThue = {name:name,cmnd:cmnd,dob:dob,quequan:quequan,sodienthoai:sodienthoai,sex:sex};
                    console.log(objNguoiThue);
                    $.ajax({
                        url: 'api/nguoithuecung.php',
                        type: 'POST',
                        dataType: 'text',
                        data: {nguoithue: objNguoiThue,sophong:sophong},
                        success:function(data){
                            $('#infoThemThue').text(data);
                            $.ajax({
                                url: 'api/nguoithuecung.php',
                                type: 'POST',
                                dataType: 'text',
                                data: {sophong: sophong},
                                success:function(data){
                                    $('#nguoithuecung').html(data);
                                }
                            })
                        }
                    })
                })  
}

function inHoaDon(){
            $('#btnInHoaDon').click(function(){
                    let date = $('#date').val();
                    let objHoadon = {
                                        sophong : sophong,
                                        date : date,
                                        dv1  : dv1,
                                        dv2  : dv2,
                                        dv3  : dv3,
                                        giaphong : giaphong,
                                        dien : tongtienDien,
                                        nuoc : tongtienNuoc,
                                        sumDebt : sumDebt,
                                        khauhao : khauhao,
                                        tongtien: tongtienthucte
                                    }
                    $.ajax({
                        url: '../includes/xuathoadon.php',
                        type: 'POST',
                        dataType: 'text',
                        data: {jsonData: JSON.stringify(objHoadon)},
                        success:function(data){
                            alert("Chuyển Đến Hoá Đơn Thanh Toán....");
                            window.open("../"+data,'_blank');

                        }
                    })

            })
}

function handleFormHoaDon(){
            // xu ly dien

            $('#dienCount').change(function(){
                dienCount = $(this).val();
                    tongtienDien = dienCount*dienPrice;
                $('#tongtienDien').text(formatNumber(tongtienDien,".",",")+" VND");
                    
            });
            $('#dienPrice').change(function(){
                dienPrice = $(this).val();
                tongtienDien = dienCount*dienPrice;
                $('#tongtienDien').text(formatNumber(tongtienDien,".",",")+" VND");
            });

            // xu ly nuoc

            $('#nuocCount').change(function(){
                nuocCount = $(this).val();
                tongtiennuoc = nuocCount*nuocPrice;
                $('#tongtienNuoc').text(formatNumber(tongtienNuoc,".",",")+" VND");
                
            });

             $('#nuocPrice').change(function(){
                 nuocPrice = $(this).val();
                 tongtienNuoc = nuocCount*nuocPrice;
                 $('#tongtienNuoc').text(formatNumber(tongtienNuoc,".",",")+" VND");
             });

            //blur sum tong tien
            $('#tinhhoadon').change(function(){
                 dv1 = Number($('#dv1_1').val());
                 dv2 = Number($('#dv2_1').val());
                 dv3 = Number($('#dv3_1').val());
                 giaphong = Number($('#giaphong1').val());
                 khauhao = Number($('#khauhao').val());
                 tongtienthucte = Number(dv1)+Number(dv2)+Number(dv3)+Number(giaphong)+Number(tongtienDien)+Number(tongtienNuoc)-Number(khauhao)+Number(sumDebt);
                let stringTongtienthucte = formatNumber(tongtienthucte,".",",")+" VND";
                $('#tongtienthucte').text(stringTongtienthucte);
            })
}