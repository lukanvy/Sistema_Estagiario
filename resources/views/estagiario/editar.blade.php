<div class="mb-3">
    <label class="form-label">Carta de Pedido de Estágio (PDF ou DOCX)</label>
    <input type="file" name="carta" class="form-control" accept=".pdf,.doc,.docx">
    
    @if ($estagiario->carta)
        <p class="mt-2">
            📎 <a href="{{ asset('storage/' . $estagiario->carta) }}" target="_blank">Ver carta atual</a>
        </p>
    @endif
</div>
