$(document).ready(function() {
    $(".farming_select").change(function() {
        farming = $(this).val();
        if(farming == 1) {
          $("#farm").text("Farming : Food Resource (200/pcs)");
        }
        else if(farming == 2) {
          $("#farm").text("Farming : Living Resource (200/pcs)");
        }
        else if(farming == 3) {
          $("#farm").text("Farming : Ores (200/pcs)");
        }
        else if(farming == 4) {
          $("#farm").text("Farming : Wood (200/pcs)");
        }
        else if(farming == 5) {
          $("#farm").text("Farming : Enemy Items (200/pcs)");
        }
        else if(farming == 6) {
          $("#farm").text("Farming : Artifact Fodder (200/pcs)");
        }
        else if(farming == 7) {
          $("#farm").text("Farming : Local Speciality (200/pcs)");
        }
    });
  $(".quest_select").change(function() {
        quest = $(this).val();
        if(quest == 1) {
          $("#quest").text("Quest : Archon Quest (15K)");
        }
        else if(quest == 2) {
          $("#quest").text("Quest : World Quest (5/15K)");
        }
        else if(quest == 3) {
          $("#quest").text("Quest : Story Quest (10K)");
        }
        else if(quest == 4) {
          $("#quest").text("Quest : Hangout Quest (10K)");
        }
    });
  $(".maintain_select").change(function() {
        maintain = $(this).val();
        if(maintain == 1) {
          $("#maintain").text("Maintenance: Harian (8K)");
        }
        else if(maintain == 2) {
          $("#maintain").text("Maintenance : Mingguan (50K)");
        }
        else if(maintain == 3) {
          $("#maintain").text("Maintenance : Bulanan (200K)");
        }
    });
    $(".option").click(function() {
      const price_maintain = $(".maintain_select option:selected").data('price');
      const price_quest = $(".quest_select option:selected").data('price');
      const price_farming = $(".farming_select option:selected").data('price');
      const total = price_maintain + price_quest + price_farming;
      $("#total").text("Total : " + total);
    });
    $(".submit").click(function() {
      //send to whatsapp
      const price_maintain = $(".maintain_select option:selected").data('price');
      const price_quest = $(".quest_select option:selected").data('price');
      const price_farming = $(".farming_select option:selected").data('price');
      const total = price_maintain + price_quest + price_farming;
      const uid = $("#uid").val();
      const email = $("#email").val();
      const password = $("#password").val();
      const server = $(".server_select option:selected").data("server");
      const farming = $(".farming_select option:selected").data("farm");
      const quest = $(".quest_select option:selected").data("quest");
      const maintain = $(".maintain_select option:selected").data("maintain");
      window.open("https://wa.me/6289509825680/?text=Hallo+Saya+Ingin+Joki%0A%0AUID+=" + uid + "%0AEmail+=" + email + "%0APassword+=" + password + "%0AServer+=" + server + "%0A%0A*------------------------------------*%0A%0AFarming+=" + farming + "%0AQuest+=" + quest + "%0AMaintenance+=" + maintain + "%0A%0A*------------------------------------*%0A%0ATotal+=" + total + "%0A%0A*------------------------------------*%0A%0ATerima+Kasih");
    });
});