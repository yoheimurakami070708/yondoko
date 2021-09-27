  $('#first').on(function(event) {
    let scores_id=$(this).val()
    let sex = $("#sex").val();
    let age = $("#age").val();
    let category = $("#category").val();
    let history = $("#history").val();
    $.ajax({
      type: "POST",
      url: "/first",
      data: {
        "scores_id": scores_id,
        "sex": sex,
        "age": age,
        "category": category,
        "history": history
      },
      dataType: "json"
    }).done((data)=> {
      if (sex == "男性") {
        $("#recommend").append('<p>DIE WITH ZERO</p>', '<img src="images/fr1.png" class="frImg" alt="おすすめ本１冊目">');
      } else {
        $("#recommend").append('<p>やり直し</p>')
      }
    }).fail((data) =>{
      alert("失敗");
    });
  });

