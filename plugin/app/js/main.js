/**
 * Created by pc on 2016/3/17.
 */

var defaultData = [
    {
        text: '二期',
        href: '#parent1',
        tags: ['4'],
        nodes: [
            {
                text: '一区',
                href: '#child1',
                tags: ['2'],
                nodes: [
                    {
                        text: '1栋',
                        href: '#grandchild1',
                        tags: ['1'],
                        nodes: [{
                            text: '1单元',
                            href: '#unit',
                            tags: [1],
                            nodes: [{
                                text: '2层',
                                href: '#layer',
                                tags: [1],
                                nodes: [{
                                    text: '101室',
                                    href: '#room',
                                    tags: [0],
                                    nodes:[{
                                        text:'1房号',
                                        href:'#room',
                                        targs:[0]
                                    }]
                                }]
                            }]
                        }]
                    },
                    {
                        text: '2栋',
                        href: '#grandchild2',
                        tags: ['0']
                    }
                ]
            },
            {
                text: '一区中心机 <span class="glyphicon glyphicon-registration-mark"></span>',
                href: '#child2',
                tags: ['0']
            }
        ]
    }
];

var $checkableTree = $('#treeview-checkable').treeview({
    data: defaultData,
    showIcon: true,
    color: "#009688",
    backColor: "#FFFFFF",
    selectedColor: '#FFFFFF',
    selectedBackColor: '#009688',
    showCheckbox: false,
    onNodeChecked: function (event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
    },
    onNodeUnchecked: function (event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
    },
    onNodeSelected:function(event,node){
        console.log(node.href);
        if(node.href!==""){
            panel.load('devices.php');
        }
    }
});

