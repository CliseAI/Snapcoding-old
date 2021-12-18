<!doctype html>
<?= $this->extend('layout/templateCourse'); ?>
<?= $this->section('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col" style="color: #0C3555;">
            <div class="mx-auto py-5" style="text-align: center;">
                <h1 style="font-size: 2.5em;">OOP</h1>
            </div>
            <div class="col-md-10 mx-auto text-center">
                <p>
                    This tutorial focuses on two built-in functions
                    <font class="code-text">print()</font> and
                    <font class="code-text">input()</font>
                    to perform I/O task in Python. Also, you will learn to import modules and use them in your program.
                </p>
                <p>
                    Python provides numerous built-in functions that are readily available to us at the Python prompt.
                    Some of the functions like
                    <font class="code-text">input()</font> and
                    <font class="code-text">print()</font>
                    are widely used for standard input and output operations respectively.
                    Let us see the output section first.
                </p>
            </div>
            <hr class="my-5">
            <div class="my-5">
                <h2>Python Output Using print() function</h2>
                <p>
                    We use the <font class="code-text">print()</font>
                    function to output data to the standard output device (screen).
                    We can also output data to a file, but this will be discussed later.
                    An example of its use is given below.
                </p>
                <p class="code-example">
                    print('Hello World !')
                </p>
                <h5>Output</h5>
                <p class="code-example">
                    Hello World !
                </p>
                <p>
                    Another example is given below :
                </p>
                <p class="code-example">
                    a = 5 <br>print('The value of a is ', a)
                </p>
                <h5>Output</h5>
                <p class="code-example">
                    The value of a is 5
                </p>
                <p>
                    In the second
                    <font class="code-text">print()</font>
                    statement, we can notice that space was
                    added between the string and the value of variable
                    <font class="code-text">a</font>
                    . This is by default,
                    but we can change it.The actual syntax of the
                    <font class="code-text">print()</font>
                    function is :
                </p>
                <p class="code-example">
                    print(*objects, sep=' ', end='\n', file=sys.stdout, flush=False)
                </p>
                <p>
                    Here,
                    <font class="code-text">objects</font>
                    is the value(s) to be printed. The
                    <font class="code-text">sep</font>
                    separator is used between the values. It defaults into a space character. After all values are printed,
                    <font class="code-text">end</font>
                    is printed. It defaults into a new line. The
                    <font class="code-text">file</font>
                    is the object where the values are printed and its default value is
                    <font class="code-text">sys.stdout</font>
                    (screen). Here is an example to illustrate this.
                </p>
                <p class="code-example">
                    print(1, 2, 3, 4)<br>
                    print(1, 2, 3, 4, sep='*')<br>
                    print(1, 2, 3, 4, sep='#', end='&')
                </p>
                <h5>Output</h5>
                <p class="code-example">
                    1 2 3 4<br>
                    1*2*3*4<br>
                    1#2#3#4&
                </p>
                <div class="my-5">
                    <h3>Output formatting</h3>
                    <p>Sometimes we would like to format our output to make it look attractive.
                        This can be done by using the <font class="code-text">str.format()</font> method.
                        This method is visible to any string object.</p>
                    <p class="code-example">
                        x = 5; y = 10<br>
                        print('The value of x is {} and y is {}'.format(x,y))<br>

                    </p>
                    <h5>Output</h5>
                    <p class="code-example">
                        The value of x is 5 and y is 10
                    </p>
                    <p>Here, the curly braces <font class="code-text">{}</font> are
                        used as placeholders. We can specify the order
                        in which they are printed by using numbers (tuple index).</p>
                    <p class="code-example">
                        print('I love {0} and {1}'.format('bread','butter'))<br>
                        print('I love {1} and {0}'.format('bread','butter'))
                    </p>
                    <h5>Output</h5>
                    <p class="code-example">
                        I love bread and butter<br>
                        I love butter and bread
                    </p>
                    <p>We can even use keyword arguments to format the string.</p>
                    <p class="code-example">
                        print('Hello {name}, {greeting}'.format(greeting = 'Good morning', name = 'John'))<br>
                    </p>
                    <h5>Output</h5>
                    <p class="code-example">
                        Hello John, Good morning
                    </p>
                    <p>We can also format strings like the old <font class="code-text">sprintf()</font>
                        style used in C programming language. We use the <font class="code-text">%</font> operator to accomplish this.</p>
                    <p class="code-example">
                        x = 12.3456789<br>
                        print('The value of x is %3.2f' %x)
                    </p>
                    <h5>Output</h5>
                    <p class="code-example">
                        The value of x is 12.35
                    </p>
                </div>
            </div>
            <hr class="my-5">
            <div class="my-5">
                <h2>Python Input</h2>
                <p>
                    Up until now, our programs were static. The value of variables was defined or hard coded into the source code.
                    To allow flexibility, we might want to take the input from the user. In Python, we have the
                    <font class="code-text">input()</font>
                    function to allow this. The syntax for
                    <font class="code-text">input()</font> is:
                </p>
                <p class="code-example">
                    input([prompt])
                </p>
                <p>
                    where
                    <font class="code-text">prompt</font>
                    is the string we wish to display on the screen. It is optional.
                </p>
                <p class="code-example">
                    num = input('Enter a number : ')<br>
                    print(num)
                </p>
                <h5>Output</h5>
                <p class="code-example">
                    Enter a number : 10<br>
                    10
                </p>
                <p>
                    Here, we can see that the entered value
                    <font class="code-text">10</font> is a string, not a number. To convert this into a number we can use
                    <font class="code-text">int()</font> or
                    <font class="code-text">float()</font>
                    functions.
                </p>
                <p class="code-example">
                    print(int('10'))<br>
                    print(float('10'))
                </p>
                <h5>Output</h5>
                <p class="code-example">
                    10<br>
                    10.0
                </p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>