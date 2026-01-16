<!--{assign var="color" value="<!--{$color|default:'primary'}-->"}-->
<!--{assign var="variant" value="btn-<!--{$variant|default:'solid'}-->"}-->

<button
    type="<!--{$type|default:'button'}-->"
    id="<!--{$id|default:''}-->"
    class="atom-btn  <!--{$class}-->"
    data-label="<!--{$label|default:'戻る'}-->"
    aria-label="<!--{$label|default:'戻る'}-->"
    <!--{if $disabled}-->disabled<!--{/if}-->
    >
    <!--{$label|default:'戻る'}-->
</button>