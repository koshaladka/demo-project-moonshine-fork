<x-moonshine::table>
    <x-slot:tbody>
        <tr x-data="{amount: {{ $element->formViewValue($item)['amount'] }}, qty: {{ $element->formViewValue($item)['qty'] }} }">
            <td>
                <x-moonshine::form.input-wrapper :name="$element->name('amount')" label="Сумма">
                    <x-moonshine::form.input type="number"
                          :name="$element->name('amount')"
                          :value="$element->formViewValue($item)['amount']"
                          x-model="amount"
                    />
                </x-moonshine::form.input-wrapper>
            </td>
            <td>
                <x-moonshine::form.input-wrapper :name="$element->name('qty')" label="Кол-во">
                    <x-moonshine::form.input type="number"
                        :name="$element->name('qty')"
                        :value="$element->formViewValue($item)['qty']"
                        x-model="qty"
                    />
                </x-moonshine::form.input-wrapper>
            </td>
            <td>
                <x-moonshine::badge color="green"
                    x-text="amount * qty"
                >
                    0
                </x-moonshine::badge>
            </td>
        </tr>
    </x-slot:tbody>
</x-moonshine::table>
