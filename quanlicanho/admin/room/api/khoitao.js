// get thong tin chu phong
function getInfoChuPhong(){
	// lay thong tin chu phong
            $.ajax({
                url: 'api/getInfoChuphong.php',
                type: 'POST',
                dataType: 'json',
                data: {sophong: sophong},
                success:function(data){
                    $('#hoten').text(data.tennguoithue);
                    $('#cmnd').text(data.cmnd);
                    $('#dob').text(data.dob);
                    $('#quequan').text(data.quequan);
                    $('#sodienthoai').text(data.sodienthoai);
                    $('#gioitinh').text(data.sex);
                }
            })
}


// get thong tin cua phong
function getInfoRoom(){
$.ajax({
                url: 'api/getInfoRoom.php',
                type: 'POST',
                dataType: 'json',
                data: {sophong: sophong},
                success:function(data){
                    $('#mathue').text(data.mathue);
                    $('#sophong').text(data.sophong);
                    if(data.trangthai=="Active"){
                        $('#trangthai').text(data.trangthai).css({"color":"#42CD12","font-weight":"bold"});
                    }else{
                        $('#trangthai').text(data.trangthai).css({"color":"#838282","font-weight":"bold"});
                    }
                    $('#ngaythue').text(data.ngaythue);

                    // xu ly dich vu 
                    let dichvu = JSON.parse(data.dichvu);   // chuyen ve kieu Array JSON
                    for(i of dichvu){
                        if(i.tenDv=="Internet cáp quang"){
                            $('#dv1').prop('checked',true);
                            dv1 = Number(i.Price);
                        }
                        if(i.tenDv=="Truyền hình cáp"){
                            $('#dv2').prop('checked',true);
                            dv2 = Number(i.Price);
                        }
                        if(i.tenDv=="Khác(rác,gửi xe,..)"){
                            $('#dv3').val(i.Price+" VND");
                            dv3 = Number(i.Price);
                        }
                    }

                    //gia phong
                    giaphong = data.giaphong;
                    $('#giaphong').text(formatNumber(giaphong,'.',',')+" VND");
                    $('#giaphong1').val(giaphong);
                    // xu ly no cu~
                    updateDebt(data.debt);
                    // tinh tong tien uoc tinh
                    updateTongTienThucTe(dv1,dv2,dv3,giaphong,sumDebt);
                }
            })
}
// update lai DEBT
function updateDebt(debt){
                    sumDebt=0;
                    debt = JSON.parse(debt); 
                    let stringDebt = "";
                    let xhtml = "";
                    for(i of debt){
                        stringDebt +="<p style=\"color:#0C549D\">"
                        stringDebt += i.date +" : " + formatNumber(i.tongtien,'.',',') +" VND";
                        stringDebt +="</p>";
                        sumDebt += Number(i.tongtien);
                        // ghi vao id xoaNo
                        xhtml +=`<input class="xoaDebt" type="checkbox" value="${i.date}"> ${i.date}: <i style="color:red">${formatNumber(i.tongtien,".",",")} VND</i>`
                        xhtml +=`<br>`;
                    }
                    $('#xoaNo').html(xhtml);
                    stringDebt+="<a data-toggle=\"modal\" class=\"btn btn-danger\" href=\"#modalXoaNo\">Xoá Nợ</a>"
                    $('.debt').html(stringDebt);
}

function updateTongTienThucTe(dv1,dv2,dv3,giaphong,sumDebt){
	let tongtienuoctinh = Number(dv1)+Number(dv2)+Number(dv3)+Number(giaphong)+Number(sumDebt);
    $('#tongtienuoctinh').text(formatNumber(tongtienuoctinh,'.',',') +" VND");
}


// get thong tin nguoi thue cung
function getNguoiThueCung(){
	//lay thong tin nguoi thue cung
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


//format tien te
function formatNumber(nStr, decSeperate, groupSeperate) {
        nStr += '';
        x = nStr.split(decSeperate);
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
        }
        return x1 + x2;
}