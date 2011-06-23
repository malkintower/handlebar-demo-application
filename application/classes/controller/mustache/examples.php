<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Mustache_Examples extends Controller_Handlebar
{
	public function action_index()
	{
		$this->view = Handlebar::factory('mustache/examples/index');
	}

	public function action_child_context()
	{
		$example_title = 'Child Context Example';
		$example_path = 'vendor/mustache/examples/child_context';
		$class_name = 'ChildContext';
		$template_name = 'child_context';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_comments()
	{
		$example_title = 'Comments Example';
		$example_path = 'vendor/mustache/examples/comments';
		$class_name = 'Comments';
		$template_name = 'comments';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_complex()
	{
		$example_title = 'Complex Example';
		$example_path = 'vendor/mustache/examples/complex';
		$class_name = 'Complex';
		$template_name = 'complex';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_delimiters()
	{
		$example_title = 'Delimiters Example';
		$example_path = 'vendor/mustache/examples/delimiters';
		$class_name = 'Delimiters';
		$template_name = 'delimiters';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_dot_notation()
	{
		$example_title = 'Dot Notation Example';
		$example_path = 'vendor/mustache/examples/dot_notation';
		$class_name = 'DotNotation';
		$template_name = 'dot_notation';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_double_section()
	{
		$example_title = 'Double Section Example';
		$example_path = 'vendor/mustache/examples/double_section';
		$class_name = 'DoubleSection';
		$template_name = 'double_section';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_escaped()
	{
		$example_title = 'Escaped Example';
		$example_path = 'vendor/mustache/examples/escaped';
		$class_name = 'Escaped';
		$template_name = 'escaped';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_grand_parent_context()
	{
		$example_title = 'Grand Parent Context Example';
		$example_path = 'vendor/mustache/examples/grand_parent_context';
		$class_name = 'GrandParentContext';
		$template_name = 'grand_parent_context';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_implicit_iterator()
	{
		$example_title = 'Implicit Iterator Example';
		$example_path = 'vendor/mustache/examples/implicit_iterator';
		$class_name = 'ImplicitIterator';
		$template_name = 'implicit_iterator';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_inverted_double_section()
	{
		$example_title = 'Inverted Double Section Example';
		$example_path = 'vendor/mustache/examples/inverted_double_section';
		$class_name = 'InvertedDoubleSection';
		$template_name = 'inverted_double_section';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_inverted_section()
	{
		$example_title = 'Inverted Section Example';
		$example_path = 'vendor/mustache/examples/inverted_section';
		$class_name = 'InvertedSection';
		$template_name = 'inverted_section';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_partials()
	{
		$example_title = 'Partials Example';
		$example_path = 'vendor/mustache/examples/partials';
		$class_name = 'Partials';
		$template_name = 'partials';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_partials_with_view_class()
	{
		$example_title = 'Partials With View Class Example';
		$example_path = 'vendor/mustache/examples/partials_with_view_class';
		$class_name = 'PartialsWithViewClass';
		$template_name = 'partials_with_view_class';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_pragma_unescaped()
	{
		$example_title = 'Pragma Unescaped Example';
		$example_path = 'vendor/mustache/examples/pragma_unescaped';
		$class_name = 'PragmaUnescaped';
		$template_name = 'pragma_unescaped';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_pragmas_in_partials()
	{
		$example_title = 'Pragmas In Partials Example';
		$example_path = 'vendor/mustache/examples/pragmas_in_partials';
		$class_name = 'PragmasInPartials';
		$template_name = 'pragmas_in_partials';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_recursive_partials()
	{
		$example_title = 'Recursive Partials Example';
		$example_path = 'vendor/mustache/examples/recursive_partials';
		$class_name = 'RecursivePartials';
		$template_name = 'recursive_partials';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_section_iterator_objects()
	{
		$example_title = 'Section Iterator Objects Example';
		$example_path = 'vendor/mustache/examples/section_iterator_objects';
		$class_name = 'SectionIteratorObjects';
		$template_name = 'section_iterator_objects';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_section_magic_objects()
	{
		$example_title = 'Section Magic Objects Example';
		$example_path = 'vendor/mustache/examples/section_magic_objects';
		$class_name = 'SectionMagicObjects';
		$template_name = 'section_magic_objects';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_section_objects()
	{
		$example_title = 'Section Objects Example';
		$example_path = 'vendor/mustache/examples/section_objects';
		$class_name = 'SectionObjects';
		$template_name = 'section_objects';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_sections()
	{
		$example_title = 'Sections Example';
		$example_path = 'vendor/mustache/examples/sections';
		$class_name = 'Sections';
		$template_name = 'sections';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_sections_nested()
	{
		$example_title = 'Sections Nested Example';
		$example_path = 'vendor/mustache/examples/sections_nested';
		$class_name = 'SectionsNested';
		$template_name = 'sections_nested';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_simple()
	{
		$example_title = 'Simple Example';
		$example_path = 'vendor/mustache/examples/simple';
		$class_name = 'Simple';
		$template_name = 'simple';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_unescaped()
	{
		$example_title = 'Unescaped Example';
		$example_path = 'vendor/mustache/examples/unescaped';
		$class_name = 'Unescaped';
		$template_name = 'unescaped';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_utf8()
	{
		$example_title = 'UTF8 Example';
		$example_path = 'vendor/mustache/examples/utf8';
		$class_name = 'UTF8';
		$template_name = 'utf8';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_utf8_unescaped()
	{
		$example_title = 'UTF8 Unescaped Example';
		$example_path = 'vendor/mustache/examples/utf8_unescaped';
		$class_name = 'UTF8Unescaped';
		$template_name = 'utf8_unescaped';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

	public function action_whitespace()
	{
		$example_title = 'Whitespace Example';
		$example_path = 'vendor/mustache/examples/whitespace';
		$class_name = 'Whitespace';
		$template_name = 'whitespace';

		$this->view = Handlebar::factory('mustache/examples/template')
				->bind('example_title', $example_title)
				->bind('example_path', $example_path)
				->bind('class_name', $class_name)
				->bind('template_name', $template_name);
	}

}
