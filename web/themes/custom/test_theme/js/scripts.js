jQuery(document).ready(function() {
  const $respostaGeral = jQuery(".respGeral .itemResp");
  const $botaoSalvar = jQuery("#salvarResp");
  const $modalExemplo = jQuery('#exampleModalCenter');

  function handleRespClick() {
      $respostaGeral.removeClass("active");
      jQuery(this).addClass("active");
      const idResp = jQuery(this).find("article").attr('data-history-node-id');

      if (idResp) {
          $botaoSalvar.removeAttr("disabled");
          $botaoSalvar.data("nidResp", idResp);
      }
  }

  function handleSaveClick(event) {
      event.preventDefault();
      const idResp = $botaoSalvar.data("nidResp");

      if (idResp) {
          jQuery.ajax({
              url: '/test-vote/receive',
              type: 'POST',
              contentType: 'application/json',
              data: JSON.stringify({
                  nid_resp: idResp,
                  timestamp_resp: Date.now()
              }),
              success: function(response) {
                  console.log(response);
                  $botaoSalvar.attr("disabled", "disabled");
                  $respostaGeral.removeClass("active");
                  $modalExemplo.modal('show');
              },
              error: function(xhr, status, error) {
                  console.log("Error:", error);
              }
          });
      }
  }

  $respostaGeral.click(handleRespClick);
  $botaoSalvar.click(handleSaveClick);
});

