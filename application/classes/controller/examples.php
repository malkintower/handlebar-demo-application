<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Examples extends Controller_Handlebar
{

	public function action_index()
	{
		$this->view = Handlebar::factory('examples/index');
	}

	public function action_child_context()
	{
		$this->view = Handlebar::factory('examples/childcontext');
	}

	public function action_comments()
	{
		$this->view = Handlebar::factory('examples/comments');
	}

	public function action_complex()
	{
		$this->view = Handlebar::factory('examples/complex');
	}

	public function action_delimiters()
	{
		$this->view = Handlebar::factory('examples/delimiters');
	}

	public function action_dot_notation()
	{
		$this->view = Handlebar::factory('examples/dotnotation');
	}

	public function action_double_section()
	{
		$this->view = Handlebar::factory('examples/doublesection');
	}

	public function action_escaped()
	{
		$this->view = Handlebar::factory('examples/escaped');
	}

	public function action_grand_parent_context()
	{
		$this->view = Handlebar::factory('examples/grandparentcontext');
	}

	public function action_implicit_iterator()
	{
		$this->view = Handlebar::factory('examples/implicititerator');
	}

	public function action_inverted_double_section()
	{
		$this->view = Handlebar::factory('examples/inverteddoublesection');
	}

	public function action_inverted_section()
	{
		$this->view = Handlebar::factory('examples/invertedsection');
	}

	public function action_partials()
	{
		$this->view = Handlebar::factory('examples/partials');
	}

	public function action_partials_with_view_class()
	{
		$this->view = Handlebar::factory('examples/partialswithviewclass');
	}

	public function action_pragma_unescaped()
	{
		$this->view = Handlebar::factory('examples/pragmaunescaped');
	}

	public function action_pragmas_in_partials()
	{
		$this->view = Handlebar::factory('examples/pragmasinpartials');
	}

	public function action_recursive_partials()
	{
		$this->view = Handlebar::factory('examples/recursivepartials');
	}

	public function action_section_iterator_objects()
	{
		$this->view = Handlebar::factory('examples/sectioniteratorobjects');
	}

	public function action_section_magic_objects()
	{
		$this->view = Handlebar::factory('examples/sectionmagicobjects');
	}

	public function action_section_objects()
	{
		$this->view = Handlebar::factory('examples/sectionobjects');
	}

	public function action_sections()
	{
		$this->view = Handlebar::factory('examples/sections');
	}

	public function action_sections_spaces()
	{
		$this->view = Handlebar::factory('examples/sectionsspaces');
	}

	public function action_simple()
	{
		$this->view = Handlebar::factory('examples/simple');
	}

	public function action_unescaped()
	{
		$this->view = Handlebar::factory('examples/unescaped');
	}

	public function action_utf8()
	{
		$this->view = Handlebar::factory('examples/utf8');
	}

	public function action_utf8_unescaped()
	{
		$this->view = Handlebar::factory('examples/utf8unescaped');
	}

	public function action_whitespace()
	{
		$this->view = Handlebar::factory('examples/whitespace');
	}

}
