.vbox 
{
    display: flex;
    flex-flow: column nowrap;
}

.vbox > * 
{
    margin-bottom: 5%;
}

.vbox > *:last-child 
{
    margin-bottom: 0;
}

.hbox 
{
    display: flex;
    flex-flow: row wrap;
}

.hbox > * 
{
    margin-right: 5%;
}

.hbox > *:last-child 
{
    margin-right: 0;
}

.hbox > .fluid,

.vbox > .fluid 
{
    flex-grow: 1;
}

body 
{
    height: 100%;
    margin: 0;
}

header.vbox 
{
    min-height: 100%;
}

header.vbox nav 
{
    margin: 0;
}

ul.hbox 
{
    background: blue;
    border: 1px solid black;
    list-style-type: none;
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
}
