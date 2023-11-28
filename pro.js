function iniciarNovaLista() {
    
    window.location.href = 'itens.php';
  };

  function adicionarItem() {
    var produto = document.getElementById("inputProduto").value;
    var valor = document.getElementById("inputValor").value;

    if (produto.trim() === "" || valor.trim() === "") {
      alert("Por favor, preencha todos os campos.");
      return;
    }

    var listItem = document.createElement("a");
    listItem.href = "#";
    listItem.className = "list-group-item list-group-item-action";
    listItem.innerHTML = produto + " - R$" + valor;

    listItem.ontouchstart = function(event) {
      event.preventDefault();

      // Exibir mensagem de confirmação
      var confirmacao = window.confirm("Deseja remover este item?");
      if (confirmacao) {
        listItem.remove();
        atualizarTotal(); // Atualizar o total após remover um item
      }
    };

    document.getElementById("listaItens").appendChild(listItem);
    atualizarTotal(); // Atualizar o total após adicionar um item

    document.getElementById("inputProduto").value = "";
    document.getElementById("inputValor").value = "";
  }

  function atualizarTotal() {
    var itens = document.getElementsByClassName("list-group-item");
    var total = 0;

    for (var i = 0; i < itens.length; i++) {
      var textoItem = itens[i].innerText;
      var valorItem = parseFloat(textoItem.split(" - R$")[1].replace(",", "."));

      if (!isNaN(valorItem)) {
        total += valorItem;
      }
    }

    // Exibir o total abaixo da última lista de itens
    var totalContainer = document.getElementById("totalContainer");
    var totalElement = document.getElementById("total");
    totalElement.innerText = "R$ " + total.toFixed(2);
  }