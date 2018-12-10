import { shallow, mount } from "vue-test-utils";
import expect from "expect";
import TodoList from "../../resources/js/components/todo.vue";
import moxios from "moxios";

describe("TodoList", () => {
    beforeEach(() => {
        moxios.install(axios);
    });

    afterEach(() => {
        moxios.uninstall(axios);
    });
});

it("renders the correct title on the page", () => {
    let wrapper = shallow(TodoList);

    expect(wrapper.html()).toContain("Todo List");
});
