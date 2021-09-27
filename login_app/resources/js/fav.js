$(".fav").on("click",function(){
  const scores_id = $(this).val()
   $.ajax({
       headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
           'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
       },
       url: "/fav",
       type: "POST",
       dataType:"json",
       data: {
           "scores_id": scores_id
       }
   })
       .done((data) => { //成功した時
           const name = `data${data.scores_id}`
           if(data.status === 200) {
               console.log(data.status,name)
               $(`[data-id=${name}]`).toggleClass('text-danger')
           }
       })
       .fail((data) => { //失敗した時
           alert("通信失敗");
       })
})