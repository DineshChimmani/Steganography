import java.awt.Color;
import java.awt.Font;
import java.awt.Insets;
import java.awt.Container;
import java.awt.GridBagLayout;
import java.awt.FlowLayout;
import java.awt.GridBagConstraints;
import java.awt.event.*;

import javax.swing.JMenu;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JLabel;
import javax.swing.JButton;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JTextArea;
import javax.swing.JScrollBar;
import javax.swing.JScrollPane;
import javax.swing.BorderFactory;

/*
 *Class Steganography_View
 */
public class Steganography_View extends JFrame
{
	//sie variables for window
	private static int WIDTH  = 500;
	private static int HEIGHT = 400;
	
	//elements for JPanel
	private JTextArea 	input;
	private JScrollBar 	scroll,scroll2;
	private JButton		encodeButton,decodeButton;
	private JLabel		image_input;
	
	//elements for Menu
	private JMenu 		file;
	private JMenu 		help;
	private JMenuItem 	encode;
	private JMenuItem 	decode;
	private JMenuItem 	about;
	private JMenuItem 	exit;
	
	/*
	 *Constructor for Steganography_View class
	 *@param name Used to set the title on the JFrame
	 */
	public Steganography_View(String name)
	{
		//set the title of the JFrame
		super(name);
		
		//Menubar
		JMenuBar menu = new JMenuBar();
		JMenu file = new JMenu("File");	file.setMnemonic('F');
		encode = new JMenuItem("Encode"); encode.setMnemonic('E'); file.add(encode);
		decode = new JMenuItem("Decode"); decode.setMnemonic('D'); file.add(decode);
		file.addSeparator();
		exit = new JMenuItem("Exit"); exit.setMnemonic('x'); file.add(exit);
		
		JMenu help = new JMenu("Help");	help.setMnemonic('H');
		about = new JMenuItem("About"); about.setMnemonic('A'); help.add(about);
		
		menu.add(file);
		menu.add(help);
		
		setJMenuBar(menu);
		
		about.addActionListener(
			new ActionListener(){
				public void actionPerformed(ActionEvent e)
				{
					JFrame fr;
					JLabel aboutinf,aboutinf1,aboutinf2,aboutinf3,aboutinf4,aboutinf5,aboutinf6,aboutinf7;
					aboutinf = new JLabel("Steganography has been developed in java ");
					aboutinf1 = new JLabel("It has been made by");
					aboutinf2 = new JLabel("Chiran Ravani"+"          "+"09P71A0515");
					aboutinf3 = new JLabel("Akshay Kumar"+"         "+"09P71A0518");
					aboutinf4 = new JLabel("Dinesh Bhargav"+"       "+"09P71A0519");
					aboutinf5 = new JLabel("for mini project in 3rd year 2nd semister");
					aboutinf6 = new JLabel("under guidance of  Mrs. I.S.N.Durga (Associate Professor)");
					aboutinf7 = new JLabel("All copyrights are reserved to these people............");
					aboutinf.setLocation(4, 8);aboutinf1.setLocation(6, 23);aboutinf2.setLocation(6, 43);aboutinf3.setLocation(6, 58);
					aboutinf4.setLocation(6, 73);aboutinf5.setLocation(6, 90);aboutinf6.setLocation(6, 105);aboutinf7.setLocation(6, 130);
					aboutinf.setSize(300,60); aboutinf1.setSize(300,60); aboutinf2.setSize(350,60);aboutinf3.setSize(350,60);
					aboutinf4.setSize(350,60); aboutinf5.setSize(350,60); aboutinf6.setSize(380,60); aboutinf7.setSize(350,60);
					fr = new JFrame("About");
					fr.add(aboutinf);fr.add(aboutinf1);fr.add(aboutinf2);fr.add(aboutinf3);
					fr.add(aboutinf4);fr.add(aboutinf5);fr.add(aboutinf6);fr.add(aboutinf7);
					Font f = new Font("Dialog", Font.PLAIN, 15);
					aboutinf.setFont(f);aboutinf1.setFont(f);aboutinf2.setFont(f);aboutinf3.setFont(f);
					aboutinf4.setFont(f);aboutinf5.setFont(f);aboutinf6.setFont(f);aboutinf7.setFont(f);
					fr.setSize(400,240);
					fr.setLayout(null);
					fr.setVisible(true);
					fr.setLocation(170,170);
					
				}
			}
		);
		
		// display rules
		setResizable(true);						//allow window to be resized: true?false
		setBackground(Color.lightGray);			//background color of window: Color(int,int,int) or Color.name
		setLocation(100,100);					//location on the screen to display window
        setDefaultCloseOperation(EXIT_ON_CLOSE);//what to do on close operation: exit, do_nothing, etc
        setSize(WIDTH,HEIGHT);					//set the size of the window
        setVisible(true);		//show the window: true?false
	}
	

	/*
	 *@return The menu item 'Encode'
	 */
	public JMenuItem	getEncode()		{ return encode;			}
	/*
	 *@return The menu item 'Decode'
	 */
	public JMenuItem	getDecode()		{ return decode;			}
	/*
	 *@return The menu item 'Exit'
	 */
	public JMenuItem	getExit()		{ return exit;				}
	/*
	 *@return The TextArea containing the text to encode
	 */
	public JTextArea	getText()		{ return input;				}
	/*
	 *@return The JLabel containing the image to decode text from
	 */
	public JLabel		getImageInput()	{ return image_input;		}
	/*
	 *@return The JPanel displaying the Encode View
	 */
	public JPanel		getTextPanel()	{ return new Text_Panel();	}
	/*
	 *@return The JPanel displaying the Decode View
	 */
	public JPanel		getImagePanel()	{ return new Image_Panel();	}
	/*
	 *@return The Encode button
	 */
	public JButton		getEButton()	{ return encodeButton;		}
	/*
	 *@return The Decode button
	 */
	public JButton		getDButton()	{ return decodeButton;		}
	
	/*
	 *Class Text_Panel
	 */
	private class Text_Panel extends JPanel
	{
		/*
		 *Constructor to enter text to be encoded
		 */
		public Text_Panel()
		{
			//setup GridBagLayout
			GridBagLayout layout = new GridBagLayout(); 
			GridBagConstraints layoutConstraints = new GridBagConstraints(); 
			setLayout(layout);
			
			input = new JTextArea();
			layoutConstraints.gridx 	= 0; layoutConstraints.gridy = 0; 
			layoutConstraints.gridwidth = 1; layoutConstraints.gridheight = 1; 
			layoutConstraints.fill 		= GridBagConstraints.BOTH; 
			layoutConstraints.insets 	= new Insets(0,0,0,0); 
			layoutConstraints.anchor 	= GridBagConstraints.CENTER; 
			layoutConstraints.weightx 	= 1.0; layoutConstraints.weighty = 50.0;
			JScrollPane scroll = new JScrollPane(input,JScrollPane.VERTICAL_SCROLLBAR_AS_NEEDED,
			JScrollPane.HORIZONTAL_SCROLLBAR_AS_NEEDED); 
			layout.setConstraints(scroll,layoutConstraints);
			scroll.setBorder(BorderFactory.createLineBorder(Color.BLACK,1));
	    	add(scroll);
	    	
	    	encodeButton = new JButton("Encode Now");
	    	layoutConstraints.gridx 	= 0; layoutConstraints.gridy = 1; 
			layoutConstraints.gridwidth = 1; layoutConstraints.gridheight = 1; 
			layoutConstraints.fill 		= GridBagConstraints.BOTH; 
			layoutConstraints.insets 	= new Insets(0,-5,-5,-5); 
			layoutConstraints.anchor 	= GridBagConstraints.CENTER; 
			layoutConstraints.weightx 	= 1.0; layoutConstraints.weighty = 1.0;
			layout.setConstraints(encodeButton,layoutConstraints);
	    	add(encodeButton);
	    	
	    	//set basic display
			setBackground(Color.lightGray);
			setBorder(BorderFactory.createLineBorder(Color.BLACK,1));
		}
	}
	
	/*
	 *Class Image_Panel
	 */
	private class Image_Panel extends JPanel
	{
		/*
		 *Constructor for displaying an image to be decoded
		 */
		public Image_Panel()
		{
			//setup GridBagLayout
			GridBagLayout layout = new GridBagLayout(); 
			GridBagConstraints layoutConstraints = new GridBagConstraints(); 
			setLayout(layout);
			
			image_input = new JLabel();
			layoutConstraints.gridx 	= 0; layoutConstraints.gridy = 0; 
			layoutConstraints.gridwidth = 1; layoutConstraints.gridheight = 1; 
			layoutConstraints.fill 		= GridBagConstraints.BOTH; 
			layoutConstraints.insets 	= new Insets(0,0,0,0); 
			layoutConstraints.anchor 	= GridBagConstraints.CENTER; 
			layoutConstraints.weightx 	= 1.0; layoutConstraints.weighty = 50.0;
			JScrollPane scroll2 = new JScrollPane(image_input,JScrollPane.VERTICAL_SCROLLBAR_AS_NEEDED,
			JScrollPane.HORIZONTAL_SCROLLBAR_AS_NEEDED); 
			layout.setConstraints(scroll2,layoutConstraints);
			scroll2.setBorder(BorderFactory.createLineBorder(Color.BLACK,1));
			image_input.setHorizontalAlignment(JLabel.CENTER);
	    	add(scroll2);
	    	
	    	decodeButton = new JButton("Decode Now");
	    	layoutConstraints.gridx 	= 0; layoutConstraints.gridy = 1; 
			layoutConstraints.gridwidth = 1; layoutConstraints.gridheight = 1; 
			layoutConstraints.fill 		= GridBagConstraints.BOTH; 
			layoutConstraints.insets 	= new Insets(0,-5,-5,-5); 
			layoutConstraints.anchor 	= GridBagConstraints.CENTER; 
			layoutConstraints.weightx 	= 1.0; layoutConstraints.weighty = 1.0;
			layout.setConstraints(decodeButton,layoutConstraints);
	    	add(decodeButton);
	    	
	    	//set basic display
			setBackground(Color.lightGray);
			setBorder(BorderFactory.createLineBorder(Color.BLACK,1));
	    }
	 }
	
	/*
	 *Main Method for testing
	 */
	public static void main(String args[])
	{
		new Steganography_View("Steganography");
	}
}