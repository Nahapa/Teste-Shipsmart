<template>
  <div>
    <FormDefault title="Novo Contato" v-on:submit="submit()">
      <TextFormDefault title="Nome" name="name" v-model="formData.name" />
      <TextFormDefault title="Email" name="email" v-model="formData.email" />
      <TextFormDefault
        title="Telefone"
        name="telefone"
        v-model="formData.phone"
      />
      <TextFormDefault title="CEP" name="cep" v-model="formData.cep" />
      <TextFormDefault
        title="Endereço"
        name="address"
        v-model="formData.address"
      />
      <TextFormDefault title="Número" name="number" v-model="formData.number" />
      <TextFormDefault
        title="Bairro"
        name="neighborhood"
        v-model="formData.neighborhood"
      />
      <TextFormDefault title="Cidade" name="city" v-model="formData.city" />
      <SelectFormDefault
        title="Estado"
        name="state"
        v-bind:options="getStatesAll"
        v-model="formData.state_id"
      />
    </FormDefault>

    <div class="m-5">
      <!-- HEADER CONTENT -->
      <div class="flex justify-between items-center my-5">
        <div class="text-theme-primary">Usuários</div>
        <div>
          <button
            type="button"
            v-on:click="setFormShow"
            class="border border-theme-primary bg-theme-primary text-white rounded-md px-4 py-1 hover:bg-theme-primary focus:outline-none focus:shadow-outline shadow"
          >
            Novo
          </button>
        </div>
      </div>
      <!-- CONTENT -->
      <div>
        <div class="w-full">
          <div
            class="border border-theme-primary rounded shadow overflow-hidden"
          >
            <table class="w-full bg-white">
              <thead class="bg-theme-primary text-white">
                <tr>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Nome
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Email
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Telefone
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Endereço
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Número
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Bairro
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Cidade
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Estado
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    CEP
                  </th>
                  <th
                    class="py-3 px-4 text-center uppercase font-semibold text-sm"
                  >
                    Ações
                  </th>
                </tr>
              </thead>
              <tbody class="text-gray-700">
                <tr
                  v-for="contact in getContactsAll"
                  v-bind:key="contact.id"
                  class="odd:bg-white even:bg-theme-striped"
                >
                  <td class="py-3 px-4 text-left">{{ contact.name }}</td>
                  <td class="py-3 px-4 text-left">{{ contact.email }}</td>
                  <td class="py-3 px-4 text-left">{{ contact.phone }}</td>
                  <td class="py-3 px-4 text-left">{{ contact.address }}</td>
                  <td class="py-3 px-4 text-left">{{ contact.number }}</td>
                  <td class="py-3 px-4 text-left">
                    {{ contact.neighborhood }}
                  </td>
                  <td class="py-3 px-4 text-left">{{ contact.city }}</td>
                  <td class="py-3 px-4 text-left">
                    {{ contact.state.abbreviation }}
                  </td>
                  <td class="py-3 px-4 text-left">
                    {{ contact.cep }}
                  </td>
                  <td
                    class="flex justify-around py-3 px-4 text-left text-theme-secondary"
                  >
                    <i
                      v-on:click="
                        editContact(contact.id);
                        setFormShow();
                      "
                      class="cursor-pointer fa fa-edit"
                    ></i>
                    <i
                      v-on:click="deleteContact(contact.id)"
                      class="cursor-pointer fa fa-trash"
                    ></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

import Format from "@/panel/mixins/FormatMixins";

import FormDefault from "@/panel/components/form/default/FormDefault";
import TextFormDefault from "@/panel/components/form/default/TextFormDefault";
import SelectFormDefault from "@/panel/components/form/default/SelectFormDefault";

export default {
  data() {
    return {
      formData: {
        id: "",
        state_id: "",
        name: "",
        email: "",
        address: "",
        number: "",
        neighborhood: "",
        city: "",
        cep: "",
        state: {
          name: "",
          abbreviation: "",
        },
      },
    };
  },

  computed: {
    ...mapGetters([
      "getContactsAll",
      "getContactById",
      "getStatesAll",
      "getAddressByCep",
    ]),
  },

  methods: {
    ...mapActions([
      "setFormShow",
      "newContact",
      "updateContact",
      "deleteContact",
      "setAddressByCep",
    ]),
    editContact(id) {
      this.formData = this.getContactById(id);
    },
    submit() {
      if (!this.formData.id) this.newContact(this.formData);
      else this.updateContact(this.formData);
    },
  },

  watch: {
    "formData.cep": function (newVal) {
      if (newVal.length == 8) {
        this.setAddressByCep(newVal).then(() => {
          let address = this.getAddressByCep;
          this.formData.address = address.address;
          this.formData.neighborhood = address.district;
          this.formData.city = address.city;
          let state = this.getStatesAll.find(
            (state) => state.abbreviation == address.state
          );
          this.formData.state = state;
          this.formData.state_id = state.id;
        });
      }
    },
  },

  mounted() {
    this.$store.dispatch("setContacts");
    this.$store.dispatch("setStates");
  },

  mixins: [Format],

  components: {
    FormDefault,
    TextFormDefault,
    SelectFormDefault,
  },
};
</script>